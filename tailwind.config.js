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
        my_primary:'#24143C',
        my_secondary:'#140C24'
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