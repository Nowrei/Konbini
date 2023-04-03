/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./templates/**/*.html.twig',
  './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    fontSize: {
      small: ['14px'],
      b: ['20px'],
      p: ['16px']

    },
    extend: {
      colors: {
    
        'white': '#ffffff',
        'konbini': {
          100: '#FFC800', // bleu
          200: '#2A303B', // gris
          300: '#F5F6F8', //gris clair
          400: '#1E32C8',
          500: '#ef6602',
          600: '#000000'
        },
      },
      height: {
        '15': '80px',

      },
    },
  },
  plugins: [require("tw-elements/dist/plugin")],
}

