<?php

namespace Mindshaker\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Str;
use RuntimeException;
use Symfony\Component\Process\PhpExecutableFinder;
use Symfony\Component\Process\Process;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Attribute\AsCommand;

use function Laravel\Prompts\confirm;
use function Laravel\Prompts\multiselect;
use function Laravel\Prompts\select;

#[AsCommand(name: 'starter:install')]
class InstallCommand extends Command implements PromptsForMissingInput
{
    use InstallUiKit;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'starter:install {stack : If you want to install Breeze with Inertia.js (React) or Blade (default)}
        {uikit : If you want to install UiKit scaffolding}
        {--debugbar : If you want to install Debugbar}
        {--ide-helper : If you want to install IDE Helper}
        {--robots : If you want to install Robots.txt}
        {--composer=global : Absolute path to the Composer binary which should be used to install packages}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install UiKit and remove unnecessary scaffolding';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        $this->line('');

        $this->installDebugBar();

        $this->installIdeHelper();

        $this->installRobots();

        $this->installBreeze();

        if ($this->argument('uikit')) {
            return $this->installUikit();
        } else {
            $this->installTailwind();
        }
    }

    protected function installBreeze()
    {
        $this->components->info('Require Breeze scaffolding...');
        if (!$this->requireComposerPackages(['laravel/breeze'], true)) {
            return 1;
        }

        $this->components->info('Installing Breeze...');
        if ($this->argument('stack') === 'react') {
            $this->runCommands(['php artisan breeze:install react']);
        } else {
            $this->runCommands(['php artisan breeze:install blade']);
        }
    }

    protected function installTailwind()
    {
        copy(__DIR__ . '/../../tailwind.config.js', base_path('tailwind.config.js'));
    }

    protected function installDebugBar()
    {
        if ($this->option('debugbar')) {
            $this->components->info('Installing Debugbar...');
            if (!$this->requireComposerPackages(['barryvdh/laravel-debugbar'], true)) {
                return 1;
            }
        }
    }

    protected function installIdeHelper()
    {
        if ($this->option('ide-helper')) {
            $this->components->info('Installing IDE Helper...');
            if (!$this->requireComposerPackages(['barryvdh/laravel-ide-helper'], true)) {
                return 1;
            }

            $this->runCommands(['php artisan ide-helper:generate']);
        }
    }

    protected function installRobots()
    {
        $this->components->info('Installing Robots.txt...');
        if ($this->option('robots')) {
            copy(__DIR__ . '/../../robots.txt', base_path('public/robots.txt'));
        }
    }


    /**
     * Prompt for missing input arguments using the returned questions.
     *
     * @return array
     */
    protected function promptForMissingArgumentsUsing()
    {
        return [
            'uikit' => fn() => confirm('Would you like to install UiKit scaffolding?'),
            'stack' => fn() => select(
                label: 'Which stack would you like to install?',
                options: ['inertia', 'blade'],
                default: 'blade'
            ),
        ];
    }

    /**
     * Interact further with the user if they were prompted for missing arguments.
     *
     * @return void
     */
    protected function afterPromptingForMissingArguments(InputInterface $input, OutputInterface $output)
    {
        $input->setOption('debugbar', confirm(
            label: 'Would you like to install Debugbar?',
            default: true
        ));

        $input->setOption('ide-helper', confirm(
            label: 'Would you like to install IDE Helper?',
            default: true
        ));

        $input->setOption('robots', confirm(
            label: 'Would you like to prevent indexing?',
            default: true
        ));
    }


    /**
     * Installs the given Composer Packages into the application.
     *
     * @param  array  $packages
     * @param  bool  $asDev
     * @return bool
     */
    protected function requireComposerPackages(array $packages, $asDev = false)
    {
        $composer = $this->option('composer');

        if ($composer !== 'global') {
            $command = ['php', $composer, 'require'];
        }

        $command = array_merge(
            $command ?? ['composer', 'require'],
            $packages,
            $asDev ? ['--dev'] : [],
        );

        return (new Process($command, base_path(), ['COMPOSER_MEMORY_LIMIT' => '-1']))
            ->setTimeout(null)
            ->run(function ($type, $output) {
                $this->output->write($output);
            }) === 0;
    }

    /**
     * Removes the given Composer Packages from the application.
     *
     * @param  array  $packages
     * @param  bool  $asDev
     * @return bool
     */
    protected function removeComposerPackages(array $packages, $asDev = false)
    {
        $composer = $this->option('composer');

        if ($composer !== 'global') {
            $command = ['php', $composer, 'remove'];
        }

        $command = array_merge(
            $command ?? ['composer', 'remove'],
            $packages,
            $asDev ? ['--dev'] : [],
        );

        return (new Process($command, base_path(), ['COMPOSER_MEMORY_LIMIT' => '-1']))
            ->setTimeout(null)
            ->run(function ($type, $output) {
                $this->output->write($output);
            }) === 0;
    }

    /**
     * Update the "package.json" file.
     *
     * @param  callable  $callback
     * @param  bool  $dev
     * @return void
     */
    protected static function updateNodePackages(callable $callback, $dev = true)
    {
        if (!file_exists(base_path('package.json'))) {
            return;
        }

        $configurationKey = $dev ? 'devDependencies' : 'dependencies';

        $packages = json_decode(file_get_contents(base_path('package.json')), true);

        $packages[$configurationKey] = $callback(
            array_key_exists($configurationKey, $packages) ? $packages[$configurationKey] : [],
            $configurationKey
        );

        ksort($packages[$configurationKey]);

        file_put_contents(
            base_path('package.json'),
            json_encode($packages, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . PHP_EOL
        );
    }

    /**
     * Delete the "node_modules" directory and remove the associated lock files.
     *
     * @return void
     */
    protected static function flushNodeModules()
    {
        tap(new Filesystem, function ($files) {
            $files->deleteDirectory(base_path('node_modules'));

            $files->delete(base_path('yarn.lock'));
            $files->delete(base_path('package-lock.json'));
        });
    }

    /**
     * Replace a given string within a given file.
     *
     * @param  string  $search
     * @param  string  $replace
     * @param  string  $path
     * @return void
     */
    protected function replaceInFile($search, $replace, $path)
    {
        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    }

    /**
     * Get the path to the appropriate PHP binary.
     *
     * @return string
     */
    protected function phpBinary()
    {
        return (new PhpExecutableFinder())->find(false) ?: 'php';
    }

    /**
     * Run the given commands.
     *
     * @param  array  $commands
     * @return void
     */
    protected function runCommands($commands)
    {
        $process = Process::fromShellCommandline(implode(' && ', $commands), null, null, null, null);

        if ('\\' !== DIRECTORY_SEPARATOR && file_exists('/dev/tty') && is_readable('/dev/tty')) {
            try {
                $process->setTty(true);
            } catch (RuntimeException $e) {
                $this->output->writeln('  <bg=yellow;fg=black> WARN </> ' . $e->getMessage() . PHP_EOL);
            }
        }

        $process->run(function ($type, $line) {
            $this->output->write('    ' . $line);
        });
    }

    /**
     * Delete the given file.
     * @param $file
     * @return void
     */
    private function deleteFile($file)
    {
        if (file_exists($file)) {
            unlink((string) $file);
        }
    }

    /**
     * Delete the given directory.
     * @param $dirPath
     * @return void
     */
    public function deleteDir($dirPath)
    {
        if (!is_dir($dirPath)) {
            return;
        }
        if (substr($dirPath, strlen($dirPath) - 1, 1) != '/') {
            $dirPath .= '/';
        }
        $files = glob($dirPath . '*', GLOB_MARK);
        foreach ($files as $file) {
            if (is_dir($file)) {
                self::deleteDir($file);
            } else {
                unlink($file);
            }
        }
        rmdir($dirPath);
    }
}
