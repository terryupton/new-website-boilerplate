module.exports = function (gulp, plugins, config) {
	return function () {
		gulp.src([
				config.paths.src.js+'/functions.js',
				config.paths.src.sass+'/**/*.scss',
				'!cms/core/**/*',
				'!cms/addons/**/*',
				'!vendor/**/*',
				'**/*.+(php|html)'
			])

		.pipe(plugins.todo({withInlineFiles: true}))
		.pipe(gulp.dest('./')) //output todo.md as markdown
		.pipe(plugins.todo.reporter('json', {
			fileName: 'TODO.json',
			withInlineFiles: true
		}))
		.pipe(gulp.dest('./')) //output todo.json as json
	};
};