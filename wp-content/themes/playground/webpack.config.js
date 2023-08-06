const path = require('path');
const TerserPlugin = require('terser-webpack-plugin');

module.exports = {

  // or 'development' for non-minified code
  mode: 'production', 

  // Replace 'app.js' with the entry point of your JavaScript code
  entry: './src/js/app.js', 

  output: {
    // Output directory path (absolute path)
    path: path.resolve(__dirname, 'dist'), 

    // Replace 'main.js' with the desired output filename
    filename: 'main.js', 
  },
  optimization: {
    minimize: true,
    minimizer: [new TerserPlugin()],
  },
};
