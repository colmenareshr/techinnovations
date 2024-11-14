/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php", "./src/**/*.js", "./src/**/*.css"],
  theme: {
    extend: {
      colors: {
        primary: "#1e3a8a", // Azul principal
        secondary: "#4b5563", // Cinza principal
      },
    },
  },
  plugins: [],
};
