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
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            fontSize: {

            'responsive-heading': 'clamp(2rem, 5vw + 1rem, 4rem)',
            'responsive-body': 'clamp(1rem, 2vw + 0.5rem, 1.5rem)',
          },
        },
    },

    plugins: [forms],
};
