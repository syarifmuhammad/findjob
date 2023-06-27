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
                secondary: '#E3FFF7',
                black_custom: '#2F2F2F',
                white_custom: "#F9F9F9",
            },
            dropShadow: {
                'soft': '0px 0px 15px rgba(0, 0, 0, 0.1)',
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(circle, rgba(80,80,80,1) 0%, rgba(80,80,80,0) 100%)'
            },
            gridTemplateColumns: {
                'profile': 'repeat(3fr 1fr)',
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
