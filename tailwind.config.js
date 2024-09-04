/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      keyframes: {
        slideUp: {
          '0%': { transform: 'translateY(20px)', opacity: '0' },
          '100%': { transform: 'translateY(0)', opacity: '1' },
        },
      },
      animation: {
        slideUp: 'slideUp 300ms ease-out',
      },
      flex: {
        '0-0-16': '0 0 16.66667%',
        '0-0-66': '0 0 66.66667%',
        '0-0-58': '0 0 58.33333%',
        '0-0-50': '0 0 50%',
        '0-0-25': '0 0 25%',




      },
      maxWidth: {
        '16': '16.66667%',
        '66': '66.66667%',
        '58': '58.33333%',
        '50': '50%',
        '25': '25%',




      },
      lineHeight:{
        '1.14': '1.14286',
        '1.11': '1.11111',

      },
      backgroundImage:{
        'bg1':'url(image/bg1.jpg)',
        'bgf':'url(image/bgf.jpg)',

      },
      fontFamily: {
        playfair: ['"Playfair Display"', 'serif'],
        roboto: ['Roboto', 'sans-serif'],
      },
    },
  },
  plugins: [
    
  ],
}

