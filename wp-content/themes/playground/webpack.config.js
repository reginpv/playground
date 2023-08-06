const path = require('path');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {
  mode: 'production', // or 'development' for non-minified code
  entry: './src/js/main.js', // Replace 'app.js' with the entry point of your JavaScript code
  output: {
    path: path.resolve(__dirname, 'dist'), // Output directory path (absolute path)
    filename: 'main.js', // Replace 'main.js' with the desired output filename
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
};
