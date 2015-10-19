module.exports = function (gulp, plugins, config) {
	return function () {
		gulp.src(config.paths.src.svg+'/*.svg')
		.pipe(plugins.imagemin({
			svgoPlugins: [{removeViewBox: false, mergePaths: true}],
		}))
		.pipe(gulp.dest(config.paths.dist.svg))
	};
};