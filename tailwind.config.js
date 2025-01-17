import forms from '@tailwindcss/forms';
import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
    './node_modules/flowbite/**/*.js',
  ],

  theme: {
    extend: {
      fontFamily: {
        sans: ['Figtree', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        primary: {
          light: '#2563f5',
          DEFAULT: '#054aed',
          dark: '#0939ab',
        },
        secondary: {
          light: '#f97316', // A warm orange shade for lighter accents
          DEFAULT: '#ea580c', // A vivid, attention-grabbing orange
          dark: '#c2410c', // A deeper orange for contrast
        },
        neutral: {
          light: '#f5f5f4', // Soft, off-white for light backgrounds
          DEFAULT: '#e7e5e4', // A muted gray for general usage
          dark: '#57534e', // A darker gray for text or accents
        },
        success: {
          light: '#2b9e66', // A light green for success messages
          DEFAULT: '#0f9d58', // A vivid green for success indicators
          dark: '#0a7e49', // A deep green for contrast
        },
        danger: {
          light: '#e55353', // A light red for error messages
          DEFAULT: '#e31c3d', // A vivid red for error indicators
          dark: '#a30b2c', // A deep red for contrast
        },
      },
    },
  },

  plugins: [forms, require('flowbite/plugin')],
};
