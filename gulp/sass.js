module.exports = function (gulp, plugins, config) {
	return function () {

		gulp.src(config.paths.src.sass+'/*.scss')

		//Any Errors
		.pipe(plugins.plumber({ errorHandler: config.onError }))

		.pipe(plugins.cssGlobbing({
			// Configure it to use SCSS files
			extensions: ['.scss']
		}))
		.pipe(plugins.sass({ outputStyle: 'expanded' }))
		.pipe(gulp.dest(config.paths.dist.css))
		.pipe(plugins.notify({ message: "<%= file.relative %> Compiled" }))

		//Now Auto-prefix
		.pipe(plugins.autoprefixer(config.autoprefixerOptions))
		.pipe(gulp.dest(config.paths.dist.css))
		.pipe(plugins.notify({ message: "<%= file.relative %> Auto-prefixed" }))

		//Now minify the Sass
		.pipe(plugins.sass({ outputStyle: 'compressed' }))
		.pipe(plugins.rename({ suffix: '.min' }))
		.pipe(gulp.dest(config.paths.dist.css))
		.pipe(plugins.notify({ message: "<%= file.relative %> Minified" }))

		//Now Auto-prefix
		.pipe(plugins.autoprefixer(config.autoprefixerOptions))
		.pipe(gulp.dest(config.paths.dist.css))
		.pipe(plugins.notify({ message: "<%= file.relative %> Auto-prefixed" }))

		//Now Pipe into the Live Project
		.pipe(plugins.browserSync.stream());

		// .pipe(sourcemaps.init())
		// .pipe(sourcemaps.write('./assets/css/'))
	};
};