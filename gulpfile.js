var gulp 			= require('gulp');
var plugins 		= require('gulp-load-plugins')({
	pattern: ['gulp-*', 'gulp.*', 'browser-sync', 'imagemin-pngquant']
});

/* ==========================================================================
	CONFIGURATION
========================================================================== */

/**
* Hostname for project
*/
var hostname = 'swh-v4.loc';

/**
* Define base directories
*/
var dist = 'assets/';
var src = 'src/';

/**
 * Define paths based on 'app/dist' folders
 */
var paths = {
	src: {
		sass: src + 'sass/',
		js: src + 'js/',
		img: src + 'img/',
		svg: src + 'svg/',
	},
	dist: {
		css: dist + 'css/',
		js: dist + 'js/',
		img: dist + 'img/',
		svg: dist + 'svg/',
	}
};

//TODO: images and SVG
var autoprefixerOptions = { browsers: ['> 1%', 'last 2 versions', 'ie 9'] };

var onError = function (err) {
	plugins.util.beep();
	plugins.util.log(plugins.util.colors.red(err));
};

var config = {
	'autoprefixerOptions': autoprefixerOptions,
	'onError': onError,
	'paths': paths,
	'hostname' : hostname
}


/* ==========================================================================
	REQUIRE TASKS
========================================================================== */
gulp.task('images', require('./gulp/images.js')(gulp, plugins, config));
gulp.task('sass', require('./gulp/sass.js')(gulp, plugins, config));
gulp.task('scripts', require('./gulp/scripts.js')(gulp, plugins, config));
gulp.task('svg', require('./gulp/svg.js')(gulp, plugins, config));
gulp.task('svg-sprite', require('./gulp/svg-sprite.js')(gulp, plugins, config));
gulp.task('todo', require('./gulp/todo.js')(gulp, plugins, config));
gulp.task('watch', require('./gulp/watch.js')(gulp, plugins, config));
gulp.task('browserSync', require('./gulp/browserSync.js')(gulp, plugins, config));


/* ==========================================================================
	GULP TASKS
========================================================================== */
gulp.task('default', ['sass', 'scripts', 'images', 'svg', 'svg-sprite', 'browserSync', 'todo', 'watch']);





