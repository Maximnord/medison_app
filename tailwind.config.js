// /** @type {import('tailwindcss').Config} */
// module.exports = {
//   content: [
//     "./resources/**/*.blade.php",
//     "./resources/**/*.js",
//     "./resources/**/*.vue",
//   ],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }

module.exports = {
  content: [
      'node_modules/preline/dist/*.js',
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
  ],
  plugins: [
      require('preline/plugin'),
  ],
}