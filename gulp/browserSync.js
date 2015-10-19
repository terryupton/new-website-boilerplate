module.exports = function (gulp, plugins, config) {
	return function () {
		// Create a new static server
		plugins.browserSync.init({
			proxy: config.hostname,
			port: 8080,
			notify: false,
		});
	};
};