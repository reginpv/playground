/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",             // Root PHP files
    "./**/*.php",          // All PHP files in subdirectories
    "./**/*.html",         // All HTML files in subdirectories (if any)
    "./src/**/*.js",       // JavaScript files in 'src' folder (if any)
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

