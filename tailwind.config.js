/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      backgroundColor : {
        primary:'#24143C',
        secondary:'#140C24'
      },
      fontFamily: {
        poppins: ["Poppins",'sans-serif'],
        inconsolata:["Inconsolata","Poppins"]
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}