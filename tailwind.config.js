/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.php', './partials/*.php', './src/**/*.{html,js}'],
  theme: {
    extend: {},
    container: {
      center: true,
      screens: {
        DEFAULT: '100%',
        sm: '480px',
        md: '768px',
        lg: '1024px',
        xl: '1224px'
      },
      padding: {
        DEFAULT: '16px',
        sm: '16px',
        md: '16px',
        lg: '24px',
        xl: '32px'
      }
    },
    screens: {
      sm: '480px',
      md: '768px',
      lg: '1024px',
      xl: '1224px',
      '2xl': '1464px',
      '3xl': '1792px'
    },
  },
  plugins: []
}
