var

	// Config
	config = {
		url: 'join-the-quest.loc',
		autoprefixer: ['last 2 versions', 'IE 9', 'Safari 8']
	},

	// GENERAL/CORE DEPENDENCIES
	browserSync 		= require('browser-sync'),
	gulp 				= require('gulp'),
	rename 				= require('gulp-rename'),
	plumber 			= require('gulp-plumber'),
	notify 				= require('gulp-notify'),
	gutil 				= require('gulp-util'),
	changed 			= require('gulp-changed'),

	//CSS/SASS RELATED DEPENDENCIES
	sass 				= require('gulp-sass'),
	cssnano 			= require('gulp-cssnano'),
	sourcemaps 			= require('gulp-sourcemaps'),
	autoprefixer 		= require('gulp-autoprefixer'),
	csscomb 			= require('gulp-csscomb'),

	// SCRIPTS RELATED DEPENDENCIES
	uglify 				= require('gulp-uglify'),
	include 			= require('gulp-include'),

	// IMG RELATED DEPENDENCIES
	imageOptim 			= require('gulp-imageoptim'),

	//SVG RELATED DEPENDENCIES
	svgmin				= require('gulp-svgmin'),
	svgstore			= require('gulp-svgstore'),

	//OTHER DEPENDENCIES
	todo 				= require('gulp-todo'),

	// del 				= require('del'),

	onError = function (err) {
		gutil.beep();
		gutil.log(gutil.colors.red(err));
	};

	// Paths
	dist = 'assets/',
	src = 'src/',

	paths = {
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


/* ==========================================================================
	STYLES
========================================================================== */
gulp.task('styles', function() {
	return gulp
		.src(paths.src.sass+'/*.scss')

		//Any Errors
		.pipe(plumber({
			errorHandler: onError
		}))

		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(notify({
			message: "<%= file.relative %> Compiled"
		}))
		.pipe(autoprefixer(config.autoprefixer))
		.pipe(notify({
			message: "<%= file.relative %> Auto-prefixed"
		}))
		.pipe(csscomb())
		.pipe(gulp.dest(paths.dist.css))
		.pipe(cssnano())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(notify({
			message: "<%= file.relative %> Minified"
		}))
		.pipe(sourcemaps.write('maps'))
		.pipe(gulp.dest(paths.dist.css))

		//Now Pipe into the Live Project
		.pipe(browserSync.stream());
});



/* ==========================================================================
	SCRIPTS
========================================================================== */
gulp.task('scripts', function() {
		// Concatenate and Minify the main production file
		gulp.src(paths.src.js+'production.mix.js')

		// //Any Errors
		.pipe(plumber({
			errorHandler: onError
		}))

		.pipe(include())
		.pipe(rename('production.js'))
		.pipe(gulp.dest(paths.dist.js))
		.pipe(notify({
			message: "JS Concatenated - <%= file.relative %>"
		}))
		.pipe(uglify())
		.pipe(rename('production.min.js'))
		.pipe(gulp.dest(paths.dist.js))
		.pipe(notify({
			message: "JS Minified - <%= file.relative %>"
		}))

		//Minify ALL JS Files
		gulp.src([paths.src.js+'/**/*.js', '!'+paths.src.js+'production.*'])

		.pipe(changed(paths.dist.js, {extension: '.min.js'}))

		// //Any Errors
		.pipe(plumber({
			errorHandler: onError
		}))

		.pipe(uglify())
		.pipe(rename({
			suffix: '.min'
		}))
		.pipe(gulp.dest(paths.dist.js))
		.pipe(notify({
			message: "JS Minified - <%= file.relative %>"
		}))

		.pipe(browserSync.stream())
});


/* ==========================================================================
	IMAGES
========================================================================== */
gulp.task('images', function() {
	// gulp.src(paths.src.img+'/**/*.+(png|gif|jpg|jpeg)')
	// .pipe(imageOptim.optimize())

	gulp.src(paths.src.img+'/**/*.svg')
	.pipe(changed(paths.dist.img))
	.pipe(svgmin())
	.pipe(notify({
		message: "<%= file.relative %> Optimised"
	}))

	.pipe(gulp.dest(paths.dist.img))
});


/* ==========================================================================
	SVG IMAGES
========================================================================== */
gulp.task('svg', function() {
	gulp.src(paths.src.svg+'/*.svg')
	.pipe(changed(paths.dist.svg))
	.pipe(svgmin())
	.pipe(gulp.dest(paths.dist.svg))
	.pipe(notify({
		message: "<%= file.relative %> Optimised"
	}))
	.pipe(svgstore())
	.pipe(rename('icons.svg'))
	.pipe(gulp.dest(paths.dist.img))
	.pipe(notify({
		message: "SVG Sprite Compiled"
	}));
});


/* ==========================================================================
	WATCH
========================================================================== */
gulp.task('watch', function() {
	gulp.watch(paths.src.sass+'/**/*', ['styles'])
	gulp.watch(paths.src.js+'/**/*', ['scripts'], browserSync.reload);
	gulp.watch(paths.src.svg+'/**/*', ['svg'], browserSync.reload);
	// gulp.watch(paths.src.img+'/**/*', ['images']).on('change', browserSync.reload);

	gulp.watch([
			'**/*.+(php|html)',
			// '!cms/**/*',
			// 'cms/templates/**/*.+(php|html)',
		]).on('change', browserSync.reload);
});

/* ==========================================================================
	BROWSERSYNC
========================================================================== */
gulp.task('browserSync', function() {
	// Create a new static server
	browserSync.init({
		proxy: config.url,
		port: 8080,
		notify: false,
		online: true
	});
});


/* ==========================================================================
	COMPILE TODO LIST TASKS
========================================================================== */
gulp.task('todo', function() {
	return gulp
		.src([
			paths.src.js+'/functions.js',
			paths.src.sass+'/**/*.scss',
			'!cms/core/**/*',
			'!cms/addons/**/*',
			'!vendor/**/*',
			'**/*.+(php|html)'
		])

		.pipe(todo({
			withInlineFiles: true}
		))

		 //output todo.md as markdown
		.pipe(gulp.dest('./'))
		.pipe(todo.reporter('json', {
			fileName: 'TODO.json',
			withInlineFiles: true
		}))

		 //output todo.json as json
		.pipe(gulp.dest('./'))
});


/* ==========================================================================
	GULP TASKS
========================================================================== */
gulp.task('default', ['styles', 'scripts', 'svg', 'browserSync', 'watch']);
gulp.task('compile', ['styles', 'scripts']);


//TODO: IMAGE OPTIM
//TODO: Delete build file if src file is removed

//TODO: SCRIPTS
// GET ERROR FILENAME IN JS ERRORS

//TO CONSIDER
//Crtical CSS Inline
//UNCSS? Didn;t work very well.
//UPDATE MAIN BOILERPLATE





