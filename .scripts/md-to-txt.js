#!/usr/bin/env node

// This script renames the Markdown files in the generated zip file to use a
// .txt extension. This is useful to adhere to WordPress theme standards and
// to reduce support requests asking what an `.md` file is.

const chalk = require('chalk');
const admzip = require('adm-zip');

console.log(chalk`{cyan Renaming .md files to .txt files inside the zip}...`);

// Create a zip object to manipulate the existing zip file.
const zip = new admzip(`${process.env.npm_package_name}.zip`);
const newZip = new admzip(`${process.env.npm_package_name}.zip`);
const zipEntries = zip.getEntries();
const themeSlug = process.env.npm_package_name;

for (let entry of zipEntries) {
	if (entry.entryName === `${themeSlug}/README.md`) {
		newZip.addFile(`${themeSlug}/README.txt`, zip.readAsText(entry.entryName));
		newZip.deleteFile(entry.entryName);
	}
	if (entry.entryName === `${themeSlug}/CHANGELOG.md`) {
		newZip.addFile(`${themeSlug}/CHANGELOG.txt`, zip.readAsText(entry.entryName));
		newZip.deleteFile(entry.entryName);
	}
	if (entry.entryName === `${themeSlug}/CONTRIBUTING.md`) {
		newZip.addFile(`${themeSlug}/CONTRIBUTING.txt`, zip.readAsText(entry.entryName));
		newZip.deleteFile(entry.entryName);
	}
}

newZip.writeZip(); // Overwrites existing zip.

console.log(chalk`{cyan Done renaming .md files to .txt. Please test the new zip file}...`);
