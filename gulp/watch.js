module.exports = function (gulp, plugins, config) {
	return function () {
		// watch Sass files
		gulp.watch('src/sass/**/*.scss', ['sass'])
		gulp.watch('src/img/**/*', ['images']);
		gulp.watch('src/svg/**/*.svg', ['svg']);
		gulp.watch('src/svg/**/*.svg', ['svg-sprite']);

		gulp.watch('src/js/**/*.js', ['scripts'], plugins.browserSync.reload);
		gulp.watch([
				'**/*.+(php|html)',
				// '!cms/**/*',
				// 'cms/templates/**/*.+(php|html)',
			]).on('change', plugins.browserSync.reload);
	};
};


// module.exports = function (gulp, plugins, config) {
// 	return function () {
// 		// watch Sass files
// 		gulp.watch(config.paths.src.sass+'/*.scss', ['sass'])
// 		gulp.watch(config.paths.src.img+'/*.+(png|gif|svg)', ['images']);
// 		gulp.watch(config.paths.src.svg+'*.svg', ['svg']);
// 		gulp.watch(config.paths.dist.svg+'/*.svg', ['svg-sprite']);

// 		gulp.watch(config.paths.src+'/*.js', ['scripts'], plugins.browserSync.reload);
// 		gulp.watch([
// 				'**/*.+(php|html)',
// 				// '!cms/**/*',
// 				// 'cms/templates/**/*.+(php|html)',
// 			]).on('change', plugins.browserSync.reload);
// 	};
// };