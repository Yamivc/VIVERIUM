/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: { 
      backgroundImage: theme => ({
      'hero': "url('public/assets/images/4.jpg')",
      
  })
  }
  },

  plugins: [
      require('flowbite/plugin')
  ],
}