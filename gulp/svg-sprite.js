module.exports = function (gulp, plugins, config) {
	return function () {
		gulp.src(config.paths.dist.svg+'/*.svg')
		.pipe(plugins.cheerio({
			// run: function ($) {
			// 	$('[fill]').removeAttr('fill');
			// },
			parserOptions: { xmlMode: true }
		}))
		.pipe(plugins.svgstore())
		.pipe(plugins.rename('icons.svg'))
		.pipe(gulp.dest(config.paths.dist.img))
		.pipe(plugins.notify({
			message: "SVG's Compiled"
		}));
	};
};