#!/usr/bin/env node

// This script replaces the default use of `wpi18n makepot`, with custom
// POT file headers. It can be run with `npm run makepot`.

const chalk = require('chalk');
const wpi18n = require('node-wp-i18n');

console.log(chalk`{cyan Making pot file}...`);

wpi18n.makepot(
	{
		domainPath: 'languages',
		potHeaders: {
			'poedit': true,
			'x-poedit-basepath': '..',
			'report-msgid-bugs-to': 'StudioPress <translations@studiopress.com>'
		}
	}
).then(
	(result) => console.log(chalk`{cyan Pot file updated at {bold ${result.domainPath}/${result.potFile}}}`),
	(err) => console.log(chalk`{red ${err}}`)
);
