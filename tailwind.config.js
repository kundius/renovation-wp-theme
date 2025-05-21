/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php', './partials/*.php', './src/**/*.{html,js}'],
  theme: {
    extend: {},
    container: {
      center: true,
      screens: {
        DEFAULT: '100%',
        sm: '100%',
        md: '768px',
        lg: '1024px',
        xl: '1224px'
      },
      padding: {
        DEFAULT: '12px',
        sm: '12px',
        md: '16px',
        lg: '24px',
        xl: '32px'
      }
    }
  },
  plugins: []
}
