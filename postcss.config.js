/** @type {import('postcss-load-config').Config} */
const config = {
  plugins: [require('postcss-custom-media'), require('tailwindcss'), require('autoprefixer')]
}

module.exports = config
