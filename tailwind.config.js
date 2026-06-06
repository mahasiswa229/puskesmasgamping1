/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        // Kita siapin warna hijau toska sesuai mockup-mu!
        'primary-teal': '#0f766e', 
        'primary-light': '#ccfbf1'
      }
    },
  },
  plugins: [],
}