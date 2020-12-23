const tailwindcss = require('tailwindcss')
const autoprefixer = require('autoprefixer')
module.exports = {
  plugins: [
    // eslint-disable-next-line no-undef
    tailwindcss('./tailwind.config.js'),
    autoprefixer()
  ]
}
