module.exports = {
	plugins: {
		'precss': {},
		'postcss-discard-duplicates': {},
		'postcss-merge-idents': {},
		'postcss-minify-gradients': {},
		'postcss-minify-selectors': {},
		'postcss-ordered-values': {},
		'postcss-reporter': {},
		'postcss-zindex': {},
		'autoprefixer': {
			browsers: 'last 5 versions',
			grid: true
		}
	}
};