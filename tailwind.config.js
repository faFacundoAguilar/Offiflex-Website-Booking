const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  content: [
    './**/*.html',
    './**/*.js',
    './**/*.php',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Poppins', ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [
    require('@tailwindcss/aspect-ratio'),
  ],
}
