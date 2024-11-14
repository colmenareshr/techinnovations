/** @type {import('tailwindcss').Config} */
module.exports = {
  purge: ['./**/*.php'],
  darkMode: false,
  theme: {
    extend: {
      colors: {
        primary: '#1e3a8a', // Azul principal
        secondary: '#4b5563', // Cinza principal
      },
    },
  },
  variants: {},
  plugins: [],
};
