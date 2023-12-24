/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      backgroundColor : {
        primary:'#24143C',
        secondary:'#140C24'
      },
      fontFamily: {
        arial: ["Arial"],
      }
    },
  },
  plugins: [],
}