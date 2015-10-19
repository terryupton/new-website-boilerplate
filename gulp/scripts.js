module.exports = function (gulp, plugins, config) {
	return function () {
		//Minify ALL JS Files
		// gulp.src('./assets/js/*.js')
		// .pipe(uglify())
		// .pipe(rename({suffix: '.min'}))
		// .pipe(gulp.dest('./assets/js/'))

		// Then Concatenate and Minify the main production file
		gulp.src(config.paths.src.js+'production.mix.js')
		.pipe(plugins.include())
		.pipe(plugins.rename('production.js'))
		.pipe(gulp.dest(config.paths.dist.js))
		.pipe(plugins.notify({
			message: "JS Concatenated"
		}))
		.pipe(plugins.uglify())
		.pipe(plugins.rename('production.min.js'))
		.pipe(gulp.dest(config.paths.dist.js))
		.pipe(plugins.notify({
			message: "JS Minified"
		}))
		.pipe(plugins.browserSync.stream())
		.pipe(plugins.notify({
			message: "JS Compiled"
		}));
	};
};