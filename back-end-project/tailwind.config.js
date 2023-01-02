const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './index.html',
        './src/**/*.{vue,js,ts,jsx,tsx}',
        "./resources/**/*.js",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'light-blue-main': '#00AEF0',
                'darker-blue-main':'#012245',
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
