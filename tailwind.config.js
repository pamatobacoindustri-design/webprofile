import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#7B1C2E',
                    dark: '#4A0E1A',
                    light: '#9B2D41',
                },
                gold: {
                    DEFAULT: '#C9A84C',
                    light: '#F0D98C',
                    dark: '#A07830',
                },
                neutral: {
                    charcoal: '#1C1C1E',
                    slate: '#6B6B6B',
                    offwhite: '#F8F5F0',
                },
            },
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
                accent: ['Cormorant Garamond', ...defaultTheme.fontFamily.serif],
            },
            backgroundImage: {
                'gradient-hero': 'linear-gradient(135deg, rgba(74,14,26,0.92) 0%, rgba(123,28,46,0.75) 60%, rgba(201,168,76,0.3) 100%)',
            },
            boxShadow: {
                'card': '0 4px 24px rgba(0,0,0,0.08)',
                'card-hover': '0 8px 40px rgba(123,28,46,0.15)',
            },
        },
    },

    plugins: [],
};
