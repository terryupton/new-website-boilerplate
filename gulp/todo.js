module.exports = function (gulp, plugins, config) {
	return function () {
		// generate a todo.md from your javascript files
		gulp.src(['assets/src/js/**/*.js', 'assets/src/sass/**/*.scss'])
			.pipe(plugins.todo())
			.pipe(gulp.dest('./')) //output todo.md as markdown
			.pipe(plugins.todo.reporter('json', {fileName: 'todo.json'}))
			.pipe(gulp.dest('./')) //output todo.json as json
	};
};