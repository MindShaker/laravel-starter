import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        fontSize: {
            'xs': ['12px', '1.2'],
            'sm': ['14px', '1.2'],
            'base': ['16px', '1.2'],
            'md': ['18px', '1.2'],
            'lg': ['22px', '1.2'],
            'xl': ['25px', '1.2'],
            '2xl': ['30px', '1.2'],
            '3xl': ['60px', '1.2'],
            '4xl': ['100px', '1.2'],
        },
        screens: {
            'sm': '475px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1440px',
            '2xl': '1920px',
        },
        extend: {
            fontFamily: {
                'montserrat': ['Montserrat'],
            },
            colors: {
                'primary': '#372D5C',
                'secondary': '#FFD524',
            },
        },

        variants: {
            fill: ['hover', 'focus'],
        },
    },

    plugins: [forms],
};
