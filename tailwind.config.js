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
        screens: {
            // hideNav: { max: "600px" },
            mobileS:"320px",
            mobileM: "375px",
            mobileL: "425px",
            mobilexl:'502px',
            tablet: "768px",
            laptop1: "1024px",
            laptop: "1440px",
            xl: "1280px",
          },
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                    display: ["Poppins", "sans-serif"],
            },

        },
    },

    plugins: [forms],
};
