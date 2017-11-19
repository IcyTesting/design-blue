let path = require( 'path' );
let webpack = require( 'webpack' );
let ExtractTextPlugin = require( 'extract-text-webpack-plugin' );
//let babel = require( 'babel-loader' );
let WebpackUglifyJsPlugin = require( 'webpack-uglify-js-plugin' );
let ProgressBar = require( 'progress-bar-webpack-plugin' );
let BrowserSyncPlugin = require( 'browser-sync-webpack-plugin' );
let CssoWebpackPlugin = require( 'csso-webpack-plugin' ).default;

module.exports = {
	resolve: {
		extensions: [ 'scss', 'css', '.js' ],
		modules: [
			path.join( __dirname, 'src' ),
			'node_modules'
		]
	},
	context: __dirname,
	entry: [ path.resolve( __dirname, './src/js/app.js' ), path.resolve( __dirname, './src/css/style.scss' ) ],
	output: {
		filename: '[name].bundle.js',
		path: path.resolve( __dirname, './src/js/' )
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: [ path.resolve( __dirname, './node_modules/' ) ],
				use: [ {
					loader: 'babel-loader',
					query: {
						presets: [ 'env' ]
					}
				} ]
			},
			// the url-loader uses DataUrls.
			// the file-loader emits files.
			{
				test: /\.(woff|woff2)(\?v=\d+\.\d+\.\d+)?$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							limit: 10000,
							mimeType: 'application/font-woff'
						}
					}
				]
			},
			{
				test: /\.ttf(\?v=\d+\.\d+\.\d+)?$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							limit: 10000,
							mimeType: 'application/octet-stream'
						}
					}
				]
			},
			{
				test: /\.(eot|oft)(\?v=\d+\.\d+\.\d+)?$/,
				use: 'file-loader'
			},
			{
				test: /\.svg(\?v=\d+\.\d+\.\d+)?$/,
				use: [
					{
						loader: 'url-loader',
						options: {
							limit: 10000,
							mimeType: 'application/svg+xml'
						}
					}
				]
			},
			{
				test: /\.(png|jpg|gif)$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[path][name].[ext]'
						}
					},
					{
						loader: 'url-loader',
						options: {
							limit: 100000
						}
					}
				]
			},
			{
				test: /\.scss$/,
				include: [
					path.resolve( __dirname, './src/css' ),
					path.resolve( __dirname, 'node_modules/bootstrap/scss' )
				],
				use: ExtractTextPlugin.extract( {
					fallback: 'style-loader',
					use: [ {
						loader: 'css-loader'// translates CSS into CommonJS modules
					}, {
						loader: 'postcss-loader' // Run post css actions
					}, {
						loader: 'sass-loader' // compiles SASS to CSS
					} ],
					publicPath: './src/css/'
				} )
			}
		]
	},
	plugins: [
		new webpack.ProvidePlugin( {
			modules: path.join( __dirname, 'node_modules' ),
			/*Jquery*/
			$: 'jquery',
			jQuery: 'jquery',
			'window.jQuery': 'jquery',
			'window.$': 'jquery',
			'jquery-ui': 'jquery-ui/jquery-ui.js',
			/*Bootstrap*/
			'Popper': 'popper.js',
			Tether: 'tether',
			'window.Tether': 'tether',
			Alert: 'exports-loader?Alert!bootstrap/js/dist/alert',
			Button: 'exports-loader?Button!bootstrap/js/dist/button',
			Carousel: 'exports-loader?Carousel!bootstrap/js/dist/carousel',
			Collapse: 'exports-loader?Collapse!bootstrap/js/dist/collapse',
			Dropdown: 'exports-loader?Dropdown!bootstrap/js/dist/dropdown',
			Modal: 'exports-loader?Modal!bootstrap/js/dist/modal',
			Popover: 'exports-loader?Popover!bootstrap/js/dist/popover',
			Scrollspy: 'exports-loader?Scrollspy!bootstrap/js/dist/scrollspy',
			Tab: 'exports-loader?Tab!bootstrap/js/dist/tab',
			Tooltip: 'exports-loader?Tooltip!bootstrap/js/dist/tooltip',
			Util: 'exports-loader?Util!bootstrap/js/dist/util'
		} ),
		new ProgressBar(),
		new ExtractTextPlugin( {
			filename: './../css/[name].min.css',
			disable: false,
			allChunks: true
		} ),
		//new CssoWebpackPlugin(),
		new WebpackUglifyJsPlugin( {
			cacheFolder: path.resolve( __dirname, './src/js' ),
			debug: true,
			minimize: true,
			sourceMap: false,
			output: {
				comments: false
			},
			compressor: {
				warnings: false
			}
		} ),
		new BrowserSyncPlugin( {
			// browse to http://localhost:3000/ during development,
			// ./public directory is being served
			host: 'localhost',
			port: 3000,
			proxy: 'dbs-web.dev',
			files: './view/**/*.php'
		} )
	]
};