module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#F2DEC1'
      }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('flowbite/plugin')
  ]
}
