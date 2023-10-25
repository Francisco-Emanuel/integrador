/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",],
  theme: {
    extend: {
      fontFamily: {
        pop: ['Poppins', 'sans-serif'],
      },
      colors: {
        'beje': '#f9f0e1',
        'verde': '#486d24'
      }
    },
  },
  plugins: [],
}

