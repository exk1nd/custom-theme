const path = require('path');
const webpack = require('webpack');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
//const HtmlWebpackPlugin = require ('html-webpack-plugin');
const { CleanWebpackPlugin } = require('clean-webpack-plugin');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const OptimizeCssAssetsWebpackPlugin = require('optimize-css-assets-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');

const isDev = process.env.NODE_ENV === 'development';
const isProd = !isDev;

const optimization = () => {
	config = {
		// runtimeChunk: 'single',
		splitChunks: {
			// chunks: 'all',
			// maxInitialRequests: Infinity,
			// minSize: 0,
			// cacheGroups: {
			//     vendor: {
			//         test: /[\\/]node_modules[\\/]/,
			//         name(module) {
			//             const packageName = module.context.match(/[\\/]node_modules[\\/](.*?)([\\/]|$)/)[1];
			//             return `npm.${packageName.replace('@', '')}`;
			//         },
			//     },
			// },
		}
	}

	if (isProd) {
		config.minimizer = [
			new OptimizeCssAssetsWebpackPlugin(),
			new TerserPlugin({
				cache: true,
				parallel: true,
				sourceMap: false
			})
		]
	}

	return config
}

const filename = (folder, ext) => isDev ? `${folder}/[name].${ext}` : `${folder}/[name].${ext}`

module.exports = {
	context: path.resolve(__dirname, 'src'),
	mode: 'development',
	entry: {
		// main: ['@babel/polyfill/noConflict', './js/main.js']
		main: ['regenerator-runtime/runtime.js', './js/main.js']
		// main: ['./js/main.js']
	},
	output: {
		filename: filename('js', 'js'),
		path: path.resolve(__dirname, 'assets')
	},

	devServer: {
		port: 4200,
		hot: isDev,
		overlay: true,
		contentBase: './src',
		watchContentBase: true,
	},
	// devtool: isDev ? 'source-map' : '',
	devtool: 'source-map',
	resolve: {
		extensions: ['.js'],
		alias: {
			'@': path.resolve(__dirname, 'src')
		}
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				loader: {
					loader: 'babel-loader',
					options: {
						presets: [
							'@babel/preset-env'
						],
						plugins: [
							"@babel/plugin-proposal-class-properties"
						]
					}
				}
			},
			{
				test: /\.(sa|sc|c)ss$/,
				use: [
					MiniCssExtractPlugin.loader,
					'css-loader',
					'sass-loader',
				],
			},
			{
				test: /\.(png|jpe?g|gif|svg|mp4)$/,
				include: path.resolve(__dirname, 'src/img'),
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[path][name].[ext]',
							publicPath: '../',
							outputPath: './img',
							useRelativePath: true
						}
					},
				]
			},
			{
				test: /\.(woff(2)?|ttf|eot)(\?v=\d+\.\d+\.\d+)?$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]',
							outputPath: '../fonts/'
						}
					}
				]
			},
			// {
			//     test: /\.(woff(2)?|ttf|eot|svg)$/,
			//     include: path.resolve(__dirname, 'src/icomoon'),
			//     loader: 'file-loader',
			//     options: {
			//         name: '[name].[ext]',
			//         publicPath: '../icomoon',
			//         outputPath: './icomoon',
			//         useRelativePath: true
			//     }
			// },
			{
				test: /\.(woff(2)?|ttf|eot|svg)$/,
				include: path.resolve(__dirname, 'src/fonts'),
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]',
							publicPath: '../',
							outputPath: './fonts',
							useRelativePath: true
						}
					},
				],
			}
		]
	},
	plugins: [
		new MiniCssExtractPlugin({
			filename: filename('css', 'css'),
		}),
		new CleanWebpackPlugin(),
		new CopyWebpackPlugin({
			patterns: [
				{
					from: path.resolve(__dirname, 'src/img'),
					to: path.resolve(__dirname, 'assets/img')
				},
			],
		})
		// ,
		// new webpack.ProvidePlugin({
		//     $: 'jquery',
		//     jQuery: 'jquery',
		//     'window.jQuery': 'jquery'
		// })
	],
	// ],
	optimization: optimization()
}
