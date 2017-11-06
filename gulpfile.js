let gulp = require( 'gulp' );
let browserSync = require( 'browser-sync' ).create();
let pump = require( 'pump' );
//let cleanDest = require( 'gulp-clean-dest' );
//let uglify = require( 'gulp-uglify' );

let sass = require( 'gulp-sass' );
let autoprefixer = require( 'gulp-autoprefixer' );
let csso = require( 'gulp-csso' );
let clean_css = require( 'gulp-clean-css' );
let csscomb = require( 'gulp-csscomb' );

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
		proxy: 'http://www.dbs-web.dev/'
	} );
	
	gulp.watch( [ 'dev/**/*.scss' ], [ 'sass' ] );
	gulp.watch( [ 'dev/**/*.php' ], [ 'reload' ] );
	gulp.watch( [ 'dev/**/*.js' ], [ 'reload' ] );
	gulp.watch( [ 'dev/**/*.json' ], [ 'reload' ] );
} );

gulp.task( 'sass', () => {
	pump( [
		gulp.src( [ 'dev/**/*.scss', '!dev/vendor/**/*.scss' ] ),
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
		gulp.dest( 'dev/' ),
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

//gulp.task( 'mini_js', () => {
//pump( [
//	gulp.src( [ 'dev/**/*.js', '!dev/**/vendor/**' ] ),
//	cleanDest( 'app', { extension: '.js' } ),
//	uglify(),
//	gulp.dest( 'app' )
//] );
//browserSync_reload();
//} );

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
gulp.task( 'default', [ 'serve', 'sass' ] );