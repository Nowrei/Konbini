/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./templates/**/*.html.twig',
  './node_modules/tw-elements/dist/js/**/*.js'],
  theme: {
    fontSize: {
      small: ['14px'],
      b: ['20px'],
      p: ['14px'],
      s: ['25px'],
      big: ['26px'],

    },
    extend: {
      width: {
        '10%': '10%',
        '15': '15%',
        '20%': '20%',
        '25%': '25%',
        '30': '30%',
        '35': '35%',
        '40%': '40%',
        '50%': '50%',
        '60%': '60%',
        '65': '65%',
        '70': '70%',
        '75': '75%',
        '80%': '80%',
        '85': '85%',
        '90%': '90%',
        '95': '95%',
        '100%': '100%',
        '536px': '536px',
        '200px': '200px',
        '260': '260.26px',
        'px': '75px',
      },

      height: {
        
        '350': '350px',
        '100': '100%',
        '501': '501px',
        'px': '75px',
        'x': '60px',
      },
      colors: {
    
        'white': '#ffffff',
        'konbini': {
          100: '#FFC800', // bleu
          200: '#2A303B', // blanc
          300: '#F5F6F8', //gris 
          400: '#1E32C8',
          500: '#ef6602',
          600: '#000000',
          700: '#FA1E14',
          800: '#05436D'
          
        },
      },
      height: {
        '15': '80px',
        '146': '146.39px',

      },
    },
  },
  plugins: [require("tw-elements/dist/plugin")],
}

