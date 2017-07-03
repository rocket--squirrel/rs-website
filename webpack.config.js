const webpack = require('webpack');
const path = require('path');
var CompressionPlugin = require("compression-webpack-plugin");

module.exports = {
  context: path.resolve(__dirname, 'src'),
  entry: ['jquery','./app.js'],
  output: {
    filename: 'script.js',
    path: path.resolve(__dirname, 'public/js')
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: [
          'style-loader',
          'css-loader'
        ]
      },
      { test: /\.scss$/,
        loaders: [
          'style',
          'css',
          'sass'
        ]
      },
      {
        test: /\.(woff|woff2|eot|ttf|otf)$/,
        use: [
          'file-loader'
        ]
       }
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: 'jquery',
      jQuery: 'jquery',
      Tether: 'tether',
    }),
    new webpack.optimize.UglifyJsPlugin({
        compress: {
            warnings: false,
            properties: true,
        sequences: true,
        dead_code: true,
        conditionals: true,
            comparisons: true,
            evaluate: true,
        booleans: true,
        unused: true,
            loops: true,
            hoist_funs: true,
            cascade: true,
        if_return: true,
        join_vars: true,
        drop_console: true,
            drop_debugger: true,
            negate_iife: true,
            unsafe: true,
            hoist_vars: true,
            //side_effects: true
        },
        sourceMap: true,
        comments: false,
        mangle: {
          // Skip mangling these
          except: ['$super', '$', 'exports', 'require']
        }
    }),
    new webpack.optimize.MinChunkSizePlugin({
      minChunkSize: 10000 // Minimum number of characters
    }),
    new webpack.optimize.CommonsChunkPlugin({
      name: "common",
      filename: "commons.js",
      minChunks: 2
    })
  ]
}
