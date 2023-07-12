const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                montserrat: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#016C6E',
                primary_50: '#CCE2E2',
                secondary: '#E3FFF7',
                black_custom: '#2F2F2F',
                white_custom: '#F5F5F5',
                gray_custom: '#848484',
                gray_soft: '#F1F1F1',
            },
            boxShadow: {
                'soft': '0px 0px 15px rgba(0, 0, 0, 0.1)',
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(circle, rgba(10,10,10,.1) 0%, rgba(10,10,10,0) 100%)'
            },
            gridTemplateColumns: {
                'profile': 'repeat(3fr 1fr)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
