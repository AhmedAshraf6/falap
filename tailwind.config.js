/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{php,html,js}', './template-parts/*.{php,html,js}'],
  theme: {
    extend: {
      colors: {
        'primary-100': '#e2f9f7',
        primary: '#324846',
        secondary: '#C7BAA9',
        neutral: '#7f8897',
        'base-100': '#ffffff',
        'gray': '#e1e1e1',
        'gray-100': "#6B7280",
        'dark':"#1E293B",
        error: '#FF6C62',
      },
      animation: {
        'bounce-slow': 'bounce 3s infinite',
        'spin-slow': 'spin 5s linear infinite',
      },
      fontFamily: {
        primary: 'Avenic',
      },
    },
  },
  plugins: [],
};
