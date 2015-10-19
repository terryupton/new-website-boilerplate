module.exports = function (gulp, plugins, config) {
	return function () {
		gulp.src(config.paths.src.img+'/**/*.+(png|gif|svg)')
		.pipe(plugins.imagemin({
			progressive: true,
			svgoPlugins: [{removeViewBox: false}],
			use: [plugins.imageminPngquant()]
		}))
		.pipe(gulp.dest(config.paths.dist.img));
	};
};