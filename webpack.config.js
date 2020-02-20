const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const browserSyncPlugin = require('browser-sync-webpack-plugin');
const copyWebpackPlugin = require('copy-webpack-plugin');
const path = require('path');
const webpack = require('webpack');

module.exports = {
  context: path.resolve(__dirname, 'src'),
  entry: path.resolve(__dirname, 'src', 'index.js'),
  module: {
    rules: [
      {
        test: /\.s[ac]ss$/i,
        use: [
          // Creates `style` nodes from JS strings
          'style-loader',
          // Translates CSS into CommonJS
          'css-loader',
          // Compiles Sass to CSS
          'sass-loader',
        ],
      },
    ],
  },
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'all.bundle.js'
  },
  plugins: [
    new webpack.ProgressPlugin(),
    new CleanWebpackPlugin(),
    new copyWebpackPlugin([
      { context: path.resolve(__dirname, 'src/images'), from: '**/*', to: 'img' }
    ]),
    new browserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://localhost/'
    })
  ]
};