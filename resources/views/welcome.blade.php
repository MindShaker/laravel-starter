<x-app-layout>
    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div uk-grid>
                <div class="uk-width-2-3@m">

                    <ul class="uk-breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Blog</a></li>
                        <li class="uk-disabled"><a>Category</a></li>
                        <li><span>Post</span></li>
                    </ul>

                    <article class="uk-article">

                        <h1 class="uk-article-title"><a class="uk-link-reset" href="#">Article Title</a></h1>

                        <hr class="uk-divider-small">

                        <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>

                        <p class="uk-column-1-2@s uk-dropcap">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                            irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</p>

                        <p class="uk-article-meta">Written by <a href="#">Super User</a> on 12 April 2012. Posted in <a
                                href="#">Blog</a></p>

                        <hr class="uk-divider-icon uk-margin-medium">

                        <div class="uk-grid-small uk-child-width-auto uk-flex-middle uk-margin-medium" uk-grid>
                            <div>
                                <button class="uk-button uk-button-default">Default</button>
                                <div uk-dropdown="mode: click">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li class="uk-active"><a href="#">Active</a></li>
                                        <li class="uk-parent">
                                            <a href="#">Parent</a>
                                            <ul class="uk-nav-sub">
                                                <li><a href="#">Sub item</a></li>
                                                <li><a href="#">Sub item</a></li>
                                            </ul>
                                        </li>
                                        <li class="uk-nav-header">Header</li>
                                        <li><a href="#"><span class="uk-margin-small-right"
                                                              uk-icon="icon: table"></span> Item</a></li>
                                        <li><a href="#"><span class="uk-margin-small-right"
                                                              uk-icon="icon: thumbnails"></span> Item</a></li>
                                        <li class="uk-nav-divider"></li>
                                        <li><a href="#"><span class="uk-margin-small-right"
                                                              uk-icon="icon: trash"></span> Item</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div>
                                <button class="uk-button uk-button-primary">Primary</button>
                            </div>
                            <div>
                                <button class="uk-button uk-button-secondary">Secondary</button>
                            </div>
                            <div>
                                <button class="uk-button uk-button-danger">Danger</button>
                            </div>
                            <div>
                                <button class="uk-button uk-button-default" disabled>Disabled</button>
                            </div>
                        </div>

                        <hr class="uk-margin-medium">

                        <div class="uk-child-width-1-2 uk-child-width-1-4@s uk-margin" uk-grid>
                            <div>
                                <ul class="uk-list">
                                    <li><a href="#">a element</a></li>
                                    <li><abbr title="Title text">abbr element</abbr></li>
                                    <li><code>code element</code></li>
                                    <li>
                                        <del>del element</del>
                                    </li>
                                    <li><dfn title="Title text">dfn element</dfn></li>
                                    <li><a href="#" class="uk-link-muted">Link Muted</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list">
                                    <li><em>em element</em></li>
                                    <li>
                                        <ins>ins element</ins>
                                    </li>
                                    <li>
                                        <mark>mark element</mark>
                                    </li>
                                    <li><q>q <q>inside</q> a q</q></li>
                                    <li><strong>strong element</strong></li>
                                    <li><a href="#" class="uk-link-reset">Link Reset</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list">
                                    <li class="uk-text-muted">Text Muted</li>
                                    <li class="uk-text-emphasis">Text Emphasis</li>
                                    <li class="uk-text-primary">Text Primary</li>
                                    <li class="uk-text-secondary">Text Secondary</li>
                                    <li class="uk-text-success">Text Success</li>
                                    <li class="uk-text-warning">Text Warning</li>
                                    <li class="uk-text-danger">Text Danger</li>
                                    <li class="uk-text-meta">Text Meta</li>
                                </ul>
                            </div>
                            <div>
                                <ul class="uk-list">
                                    <li><span class="uk-label">Default</span></li>
                                    <li><span class="uk-label uk-label-success">Success</span></li>
                                    <li><span class="uk-label uk-label-warning">Warning</span></li>
                                    <li><span class="uk-label uk-label-danger">Danger</span></li>
                                    <li><a class="uk-badge" href="#">1</a></li>
                                    <li>
                                        <a class="uk-icon-button" href="#" uk-icon="icon: home"></a>
                                        <a class="uk-icon-button" href="#" uk-icon="icon: github"></a>
                                        <a class="uk-icon-link" href="#" uk-icon="icon: trash"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <pre class="uk-pre uk-margin-medium"><code>&lt;div class="myclass">...&lt;div></code></pre>

                        <blockquote class="uk-margin-medium" cite="#">
                            <p>The blockquote element represents content that is quoted from another source, optionally
                                with a citation which must be within a footer or cite element.</p>
                            <footer>Someone famous in <cite><a href="#">Source Title</a></cite></footer>
                        </blockquote>

                        <div class="uk-grid-small" uk-grid>
                            <div>
                                <a class="uk-button uk-button-text" href="#">Read more</a>
                            </div>
                            <div>
                                <a class="uk-button uk-button-text" href="#">5 Comments</a>
                            </div>
                        </div>

                    </article>

                    <hr class="uk-margin-medium">

                    <ul class="uk-comment-list uk-margin-medium">
                        <li>
                            <article class="uk-comment uk-visible-toggle" tabindex="-1">
                                <header class="uk-comment-header uk-position-relative">
                                    <div class="uk-grid-medium uk-flex-middle" uk-grid>
                                        <div class="uk-width-auto">
                                            <img class="uk-comment-avatar" src="https://placekitten.com/300/300" width="50" alt="">
                                        </div>
                                        <div class="uk-width-expand">
                                            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset"
                                                                                             href="#">Author</a></h4>
                                            <p class="uk-comment-meta uk-margin-remove-top"><a class="uk-link-reset"
                                                                                               href="#">12 days ago</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="uk-position-top-right uk-position-small uk-hidden-hover"><a
                                            class="uk-button uk-button-text" href="#">Reply</a></div>
                                </header>
                                <div class="uk-comment-body">
                                    <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod
                                        tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</p>
                                </div>
                            </article>
                        </li>
                    </ul>

                    <ul class="uk-pagination uk-flex-center" uk-margin>
                        <li><a href="#"><span uk-pagination-previous></span></a></li>
                        <li><a href="#">1</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">6</a></li>
                        <li class="uk-active"><span>7</span></li>
                        <li><a href="#">8</a></li>
                        <li><a href="#">9</a></li>
                        <li><a href="#">10</a></li>
                        <li class="uk-disabled"><span>...</span></li>
                        <li><a href="#">20</a></li>
                        <li><a href="#"><span uk-pagination-next></span></a></li>
                    </ul>

                </div>
                <div class="uk-width-expand@m">

                    <div class="uk-margin-medium-bottom">
                        <form class="uk-search uk-search-default uk-width-1-1">
                            <span uk-search-icon></span>
                            <input class="uk-search-input" type="search" placeholder="Search...">
                        </form>
                    </div>

                    <ul class="uk-nav-default uk-nav-parent-icon uk-margin-medium" uk-nav>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a>
                                    <ul>
                                        <li><a href="#">Sub item</a></li>
                                        <li><a href="#">Sub item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Parent</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Header</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a>
                        </li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
                    </ul>

                    <div class="uk-card uk-card-body uk-card-default uk-card-hover">
                        <h3 class="uk-card-title">Default</h3>
                        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="uk-margin uk-card uk-card-body uk-card-primary uk-card-hover">
                        <h3 class="uk-card-title">Primary</h3>
                        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="uk-margin uk-card uk-card-body uk-card-secondary uk-card-hover">
                        <h3 class="uk-card-title">Secondary</h3>
                        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                    <div class="uk-margin uk-card uk-card-body uk-card-hover">
                        <h3 class="uk-card-title">Hover</h3>
                        <p>Lorem ipsum <a href="#">dolor</a> sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>

                </div>
            </div>

            <hr class="uk-margin-large">

            <div class="uk-grid-divider" uk-grid>
                <div class="uk-width-3-4@m">

                    <h1 class="uk-heading-2xlarge uk-margin-small">2XL</h1>
                    <h1 class="uk-heading-xlarge uk-margin-small">X-Large</h1>
                    <h1 class="uk-heading-large uk-margin-small">Heading L</h1>
                    <h1 class="uk-heading-medium uk-margin-small">Heading M</h1>
                    <h1 class="uk-heading-small uk-margin-small">Heading S</h1>

                    <h1 class="uk-margin-small">Heading H1</h1>
                    <h2 class="uk-margin-small">Heading H2</h2>
                    <h3 class="uk-margin-small">Heading H3</h3>
                    <h4 class="uk-margin-small">Heading H4</h4>
                    <h5 class="uk-margin-small">Heading H5</h5>
                    <h6 class="uk-margin-small">Heading H6</h6>

                    <h3 class="uk-heading-divider">Heading Divider</h3>
                    <h3 class="uk-heading-bullet">Heading Bullet</h3>
                    <h3 class="uk-heading-line"><span>Heading Line</span></h3>

                    <div class="uk-overflow-auto uk-margin-medium-top">
                        <table class="uk-table uk-table-divider uk-table-hover uk-table-small">
                            <thead>
                            <tr>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                                <th>Table Heading</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            <tr>
                                <td>Table Data</td>
                                <td>Table Data</td>
                                <td>Table Data</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: {{ date('Y-m-d H:i:s', strtotime('+7 days'));}}">
                        <div>
                            <div class="uk-countdown-number uk-countdown-days"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-hours"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-minutes"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
                        </div>
                        <div class="uk-countdown-separator">:</div>
                        <div>
                            <div class="uk-countdown-number uk-countdown-seconds"></div>
                            <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
                        </div>
                    </div>

                </div>

                <div class="uk-width-1-4@m">

                    <div class="uk-child-width-1-1@s" uk-grid>
                        <div>

                            <form class="uk-form-stacked">

                                <div class="uk-margin-small">
                                    <label class="uk-form-label">Text</label>
                                    <input class="uk-input" type="text" placeholder="Some text...">
                                </div>

                                <div class="uk-margin-small">
                                    <select class="uk-select">
                                        <option>Option 01</option>
                                        <option>Option 02</option>
                                    </select>
                                </div>

                                <div class="uk-margin-small">
                                    <textarea class="uk-textarea" rows="2" placeholder="Some text..."></textarea>
                                </div>

                                <div class="uk-grid-small uk-child-width-auto" uk-grid>
                                    <div>
                                        <label><input class="uk-radio" type="radio" name="radio"> Radio</label>
                                    </div>
                                    <div>
                                        <label><input class="uk-checkbox" type="checkbox"> Checkbox</label>
                                    </div>
                                </div>

                                <div class="uk-margin-small">
                                    <input class="uk-range" type="range" value="2" min="0" max="10" step="0.1">
                                </div>

                            </form>

                        </div>
                        <div>

                            <form class="uk-form-stacked">

                                <div class="uk-margin-small">
                                    <label class="uk-form-label">States</label>
                                    <input class="uk-input" type="text" placeholder=":disabled" disabled>
                                </div>

                                <div class="uk-margin-small">
                                    <input class="uk-input uk-form-danger" type="text" placeholder="form-danger"
                                           value="form-danger">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input uk-form-success" type="text" placeholder="form-success"
                                           value="form-success">
                                </div>
                                <div class="uk-margin-small">
                                    <input class="uk-input uk-form-blank" type="text" placeholder="form-blank">
                                </div>

                            </form>

                        </div>
                    </div>

                    

                    <div class="uk-margin-medium-top" uk-alert>
                        <a href="#" class="uk-alert-close" uk-close></a>
                        <p>Default</p>
                    </div>

                    <div class="uk-alert-primary" uk-alert>
                        <a href="#" class="uk-alert-close" uk-close></a>
                        <p>Primary</p>
                    </div>

                    <div class="uk-alert-success" uk-alert>
                        <a href="#" class="uk-alert-close" uk-close></a>
                        <p>Success</p>
                    </div>

                    <div class="uk-alert-warning" uk-alert>
                        <a href="#" class="uk-alert-close" uk-close></a>
                        <p>Warning</p>
                    </div>

                    <div class="uk-alert-danger uk-margin-remove-bottom" uk-alert>
                        <a href="#" class="uk-alert-close" uk-close></a>
                        <p>Danger</p>
                    </div>

                    <ul class="uk-nav uk-nav-primary uk-margin-medium">
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>

                    <ul class="uk-nav uk-nav-secondary uk-margin-medium">
                        <li class="uk-active"><a href="#"><div>Active<div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div></div></a></li>
                        <li><a href="#"><div>Item<div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div></div></a></li>
                        <li><a href="#"><div>Item<div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div></div></a></li>
                        <li><a href="#"><div>Item<div class="uk-nav-subtitle">Subtitle lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do.</div></div></a></li>
                    </ul>
                </div>
            </div>

            <hr class="uk-margin-medium">

            <div class="uk-child-width-1-2@s uk-child-width-expand@m" uk-grid>
                <div>

                    <div class="uk-inline">
                        <img src="https://placekitten.com/300/300" alt="">
                        <a class="uk-position-absolute uk-transform-center" style="left: 20%; top: 30%" href="#"
                           uk-marker></a>
                        <a class="uk-position-absolute uk-transform-center" style="left: 60%; top: 40%" href="#"
                           uk-marker></a>
                        <a class="uk-position-absolute uk-transform-center" style="left: 80%; top: 70%" href="#"
                           uk-marker></a>
                    </div>

                </div>
                <div>

                    <div class="uk-inline-clip">
                        <img src="https://placekitten.com/300/300" alt="">
                        <div class="uk-overlay uk-overlay-default uk-position-bottom">
                            <p>Default Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="uk-inline-clip">
                        <img src="https://placekitten.com/300/300" alt="">
                        <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                            <p>Primary Lorem ipsum dolor sit amet, consectetur.</p>
                        </div>
                    </div>

                </div>
                <div>

                    <div class="uk-inline uk-light">
                        <img src="https://placekitten.com/300/300" alt="">
                        <div class="uk-position-center">
                            <span uk-overlay-icon></span>
                        </div>
                    </div>

                </div>
            </div>

            <hr class="uk-margin-medium">

            <div class="uk-grid-divider uk-child-width-auto@m" uk-grid>
                <div>

                    <ul class="uk-dotnav">
                        <li class="uk-active"><a href="#">Item 1</a></li>
                        <li><a href="#">Item 2</a></li>
                        <li><a href="#">Item 3</a></li>
                        <li><a href="#">Item 4</a></li>
                        <li><a href="#">Item 5</a></li>
                        <li><a href="#">Item 6</a></li>
                    </ul>

                </div>
                <div>

                    <a href="#" uk-slidenav-previous></a>
                    <a href="#" uk-slidenav-next></a>

                </div>
                <div>

                    <ul class="uk-thumbnav">
                        <li class="uk-active"><a href="#"><img src="https://placekitten.com/300/300" width="60" alt=""></a></li>
                        <li><a href="#"><img src="https://placekitten.com/300/300" width="60" alt=""></a></li>
                        <li><a href="#"><img src="https://placekitten.com/300/300" width="60" alt=""></a></li>
                    </ul>

                </div>
                <div>

                    <div
                        class="uk-tooltip uk-tooltip-top-center uk-display-inline-block uk-margin-remove uk-position-relative">
                        Tooltip
                    </div>

                </div>
                <div class="uk-width-expand@m">

                    <progress class="uk-progress" value="45" max="100">45%</progress>

                </div>
                <div>

                    <button type="button" uk-close></button>

                </div>
                <div>

                    <a href="#" uk-totop></a>

                </div>
            </div>

            <hr class="uk-margin-medium">

            <div class="uk-grid-divider uk-child-width-expand@m" uk-grid>
                <div>

                    <ul class="uk-subnav uk-subnav-divider" uk-margin>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-disabled"><a>Disabled</a></li>
                    </ul>

                </div>
                <div>

                    <ul class="uk-subnav uk-subnav-pill" uk-margin>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-disabled"><a>Disabled</a></li>
                    </ul>

                </div>
                <div>

                    <ul uk-tab>
                        <li class="uk-active"><a href="#">Active</a></li>
                        <li><a href="#">Item</a></li>
                        <li class="uk-disabled"><a>Disabled</a></li>
                    </ul>

                </div>
            </div>

            <hr class="uk-margin-medium">

            <div class="uk-grid-divider uk-child-width-expand@m" uk-grid>
                <div>

                    <ul class="uk-list uk-list-bullet uk-margin-medium">
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>

                    <ul class="uk-list uk-list-striped">
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>

                </div>
                <div>

                    <ul class="uk-list uk-list-divider uk-margin-medium">
                        <li>List item 1</li>
                        <li>List item 2</li>
                        <li>List item 3</li>
                    </ul>

                    <dl class="uk-description-list uk-description-list-divider">
                        <dt>Description lists</dt>
                        <dd>A description text</dd>
                        <dt>Description lists</dt>
                        <dd>A description text</dd>
                    </dl>

                </div>
                <div>

                    <ul uk-accordion>
                        <li class="uk-open">

                            <a class="uk-accordion-title" href="#">Item 1</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>

                        </li>
                        <li>

                            <a class="uk-accordion-title" href="#">Item 2</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>

                        </li>
                        <li>

                            <a class="uk-accordion-title" href="#">Item 3</a>
                            <div class="uk-accordion-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco.</p>
                            </div>

                        </li>
                    </ul>

                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-padding-remove-vertical">
        <div class="uk-child-width-1-2@s uk-child-width-1-4@l uk-grid-collapse uk-grid-match" uk-grid>
            <div>
                <div class="uk-tile uk-tile-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-primary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor.
                </div>
            </div>
            <div>
                <div class="uk-tile uk-tile-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                    eiusmod tempor.
                </div>
            </div>
        </div>
    </div>

    <div class="uk-section uk-section-default">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-muted">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-primary">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div class="uk-section uk-section-secondary">
        <div class="uk-container">

            <div class="uk-grid-large uk-flex-middle" uk-grid>
                <div class="uk-width-expand@m">
                    <p class="uk-text-large">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor.</p>
                </div>
                <div class="uk-width-auto@m">
                    <a class="uk-button uk-button-default uk-button-large" href="#">Button</a>
                </div>
            </div>

        </div>
    </div>

    <div id="modal" uk-modal>
        <div class="uk-modal-dialog">
            <button class="uk-modal-close-default" type="button" uk-close></button>
            <div class="uk-modal-header">
                <h2 class="uk-modal-title">Headline</h2>
            </div>
            <div class="uk-modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                    aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            <div class="uk-modal-footer uk-text-right">
                <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
                <button class="uk-button uk-button-primary" type="button">Save</button>
            </div>
        </div>
    </div>

    <div id="modal-search" class="uk-modal-full" uk-modal>
        <div class="uk-modal-dialog uk-flex uk-flex-center uk-flex-middle" uk-height-viewport>

            <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>

            <div>

                <ul class="uk-nav-primary uk-nav-center" uk-nav>
                    <li class="uk-active"><a href="#">Active</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                    <li><a href="#">Item</a></li>
                </ul>

                <div class="uk-margin">
                    <form class="uk-search uk-search-large">
                        <input class="uk-search-input uk-text-center" type="search" placeholder="Search...">
                    </form>
                </div>

            </div>

        </div>
    </div>

    <div id="offcanvas" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>

            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#">Active</a></li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> Item</a></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>
            </ul>

            <h3>Title</h3>

            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                ex ea commodo consequat.</p>

        </div>
    </div>
</x-app-layout>