let gulp = require( 'gulp' );
let browserSync = require( 'browser-sync' ).create();
let pump = require( 'pump' );

let cleanDest = require( 'gulp-clean-dest' );
//let uglify = require( 'gulp-uglify' );
let babel = require( 'gulp-babel' );

let sass = require( 'gulp-sass' );
let autoprefixer = require( 'gulp-autoprefixer' );
let csso = require( 'gulp-csso' );
let clean_css = require( 'gulp-clean-css' );
let csscomb = require( 'gulp-csscomb' );

let rename = require( 'gulp-rename' );

//const { phpMinify } = require( '@cedx/gulp-php-minify' );
//const eslint = require( 'gulp-eslint' );

/////////////////////////////////////////////////////////
//function browserSync_reload( time = 500 ) {
//	setTimeout( () => {
//	browserSync.reload();
//	}, time );
//}
/////////////////////////////////////////////////////////

gulp.task( 'serve', () => {
	browserSync.init( {
		proxy: 'http://www.dbs-web.dev/',
		notify: true
	} );
	
	gulp.watch( [ './src/**/*.scss' ], [ 'sass' ] );
	gulp.watch( [ './**/*.php' ], [ 'reload' ] );
	gulp.watch( [ './src/**/*.js' ], [ 'mini_js' ] );
	//gulp.watch( [ './**/*.json' ], [ 'reload' ] );
} );

gulp.task( 'sass', () => {
	pump( [
		gulp.src( [ './src/**/*.scss' ] ),
		cleanDest( './src/**/*.css' ),
		sass(),
		autoprefixer( {
			browsers: [ 'last 5 versions' ],
			cascade: false
		} ),
		csso(),
		clean_css( {
			compatibility: 'ie7',
			format: 'beautify',
			level: {
				1: {
					all: true
				},
				2: {
					all: true
				}
			}
		} ),
		csscomb(),
		gulp.dest( './src' ),
		browserSync.stream()
	] );
} );

//gulp.task( 'mini_php', () => {
//pump( [
//	gulp.src( [ 'dev/**/*.php', '!dev/**/vendor/**' ], { read: false } ),
//	cleanDest( 'app', { extension: '.php' } ),
//	phpMinify( { binary: 'C:\\wamp64\\bin\\php\\php7.0.10\\php.exe' } ),
//	gulp.dest( 'app' )
//] );
//browserSync_reload();
//} );

gulp.task( 'mini_js', () => {
	pump( [
		gulp.src( [ './src/**/*.js' ] ),
		babel( {
			presets: [ 'es2015' ]
		} ),
		cleanDest( './src/js/build.js'),
		rename( {
			dirname: 'js',
			basename: 'build',
			extname: '.js'
		} ),
		//uglify(),
		gulp.dest( './src' )
	] );
	browserSync.reload();
} );

//gulp.task( 'move', () => {
//pump( [
//	gulp.src( [ 'dev/**/*.css', 'dev/**/.htaccess', 'dev/**/*.json' ] ),
//	cleanDest( 'app', { extension: [ '.css', '.htaccess', '.json' ] } ),
//	gulp.dest( 'app' )
//] );
//browserSync_reload();
//} );

//gulp.task( 'composer', () => {
//pump( [
//	gulp.src( [ 'dev/vendor/**' ] ),
//	gulp.dest( 'app/vendor' )
//] );
//browserSync_reload();
//} );

gulp.task( 'reload', () => {
	browserSync.reload();
} );
gulp.task( 'default', [ 'serve', 'sass', 'mini_js' ] );