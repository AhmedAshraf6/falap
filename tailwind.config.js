/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{php,html,js}', './template-parts/*.{php,html,js}'],
  theme: {
    colors: {
      'primary-100': '#e2f9f7',
      primary: '#324846',
      secondary: '#F9F9F9',
      // accent: '#ffffff',
      neutral: '#7f8897',
      'base-100': '#ffffff',
      // info: '#ffffff',
      // success: '#00ffff',
      // warning: '#ffffff',
      'gray':'#e1e1e1',
      'gray-100':"#6B7280",
      error: '#FF6C62',
    },
    extend: {
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
