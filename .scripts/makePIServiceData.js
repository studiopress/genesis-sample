#!/usr/bin/env node
/**
 * Create a JSON file to be consumed by the Product Info Service
 *
 * @TODO Maybe convert "tags" value to an array?
 */
const fs = require('fs');

/**
 * Run the script
 */
const runScript = function() {
	// Sanitize the destination path
	const destPath = sanitizeDestPath(process.argv[2]);

	// Declare empty data object
	let data = {};

	// Get array of "theme" keys from process.env.npm_package_theme_*
	const keys = Object.keys(process.env).filter(key => key.match(/npm_package_theme_.+/));

	// Iterate through keys and populate the data object
	// Note: this isn't using a map because we want the output to be an object, not an array
	keys.forEach(envKey => {
		key = envKey.match(/npm_package_theme_(.+)/)[1]; // strip npm_package_theme_ from key
		data[key] = process.env[envKey]; // Save to data object
	});

	// Write data object to a JSON file
	const themeName = process.env.THEME_SLUG || data.textdomain;
	const themeVersion = process.env.THEME_VERSION || data.version;
	const filePath = `${destPath}/${process.env.VERSION_DATA_FILE}` || `${destPath}/${themeName}.${themeVersion}.json`;
	fs.writeFileSync(filePath, JSON.stringify(data));
}

/**
 * Sanitize destination path
 *
 * @param {string} path
 *
 * @return {string}
 */
const sanitizeDestPath = function(path) {
	const defaultPath = process.cwd();

	// Return default if a path wasn't provided
	if( ! path || ! path.length){
		return defaultPath;
	}

	// Return default if the provided path doesn't exist
	if (!fs.existsSync(path)) {
		return defaultPath;
	}

	return path;
}

// Run the script
runScript();
