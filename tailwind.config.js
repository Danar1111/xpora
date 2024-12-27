import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.vue'

    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors:{
                'twine': {
                    '50': '#faf6f2',
                    '100': '#f4ece0',
                    '200': '#e8d7c0',
                    '300': '#d9bd98',
                    '400': '#ca9f72',
                    '500': '#bd8552',
                    '600': '#af7047',
                    '700': '#925a3c',
                    '800': '#764a36',
                    '900': '#603e2e',
                    '950': '#331f17',
                },
                'tobacco-brown': {
                    '50': '#f7f5ef',
                    '100': '#ebe7d6',
                    '200': '#d8d0b0',
                    '300': '#c1b283',
                    '400': '#ae9961',
                    '500': '#9f8753',
                    '600': '#896e45',
                    '700': '#765b3e',
                    '800': '#5e4835',
                    '900': '#523f31',
                    '950': '#2e221a',
                },
                'orient': {
                    '50': '#e9ffff',
                    '100': '#c8feff',
                    '200': '#98fcff',
                    '300': '#52f5ff',
                    '400': '#04e5ff',
                    '500': '#00c7f2',
                    '600': '#009dcb',
                    '700': '#007da3',
                    '800': '#076281',
                    '900': '#0b526e',
                    '950': '#00364d',
                },


            }
        },
    },

    plugins: [forms],
};
