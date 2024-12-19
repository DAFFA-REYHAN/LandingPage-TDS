/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        colors: {
            light: '#fff',
            dark: '#1e1e1e',
            primary: '#2B4950',
            secondary: '#62A6B6',
            third: '#FB4141',
          }
      },
    },
    plugins: [],
  }
