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
                poppins: ['Poppins', 'sans-serif'] // Font dari layout Anda
            },
            // INI ADALAH PALET WARNA MAROON BARU KITA
            colors: {
                'maroon-dark': '#800000',     // Merah Maroon tua (untuk footer, stats)
                'maroon-primary': '#B91C1C',  // Merah cerah (untuk tombol, link, aksen)
                'maroon-light': '#FEE2E2',    // Merah muda/muda (untuk background badge)
            }
        },
    },

    plugins: [forms],
};