module.exports = {
  mode: 'jit',
  content: [
    './resources/views/**/*.blade.php',
    './resources/js/**/*.vue',
  ],
  theme: {
    screens: {
      xs: '320px',
      sm: '480px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1536px',
    },
    extend: {
      colors: {
        primary: '#1a3a52',
        accent: '#FFC107',
        dark: '#1a1a1a',
        light: '#f8f9fa',
      },
      fontFamily: {
        sans: ['Poppins', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
};
