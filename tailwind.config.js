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
      width: {
        '10%': '10%',
        '20%': '20%',
        '25%': '25%',
        '30%': '30%',
        '40%': '40%',
        '50%': '50%',
        '60%': '60%',
        '70%': '70%',
        '80%': '80%',
        '90%': '90%',
        '95%': '95%',
        '100%': '100%',
        '536px': '536px',
        '200px': '200px',
      },
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

