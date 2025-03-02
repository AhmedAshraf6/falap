/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{php,html,js}', './template-parts/*.{php,html,js}'],
  theme: {
    colors: {
      'primary-100': '#6d24f508',
      primary: '#401F92',
      secondary: '#F9F9F9',
      // accent: '#ffffff',
      neutral: '#1E293B',
      'base-100': '#ffffff',
      // info: '#ffffff',
      // success: '#00ffff',
      // warning: '#ffffff',
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
