/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{php,html,js}", "./partial/*.{php,html,js}", "./partial/footer/*.{php,html,js}"],
  important: true,
  theme: {
    extend: {
      colors: {
        'black-800': '#2C2C2C',
        'purple-10': '#4C2CFF',
      },
      backgroundColor: {
        'purple-10-05': 'rgba(76, 44, 255, 0.05)',
      },
    },
    container: {
      center: true,
    },
  },
  plugins: [],
}

