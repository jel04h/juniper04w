'use strict';

module.exports = {
	theme: {
		slug: 'juniper04w',
		name: 'juniper04w',
		author: 'Joan Lin Williams'
	},
	dev: {
		browserSync: {
			live: true,
			proxyURL: 'wprig.test:8888',
			bypassPort: '8181'
		},
		browserslist: [ // See https://github.com/browserslist/browserslist
			'> 1%',
			'last 2 versions'
		],
		debug: {
			styles: false, // Render verbose CSS for debugging.
			scripts: false // Render verbose JS for debugging.
		}
	},
	export: {
		compress: true
	}
};
