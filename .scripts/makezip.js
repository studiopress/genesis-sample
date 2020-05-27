#!/usr/bin/env node

// Creates a zip file for distribution, excluding development and system files.
// Using this instead of `git archive` for greater control, and to avoid an
// issue with some applications (such as Path Finder) incorrectly decompressing
// archives created by git archive with the `--prefix` flag.
//
// Also renames some .md files to .txt to reduce support requests.

const fs = require("fs");
const path = require("path");

const chalk = require("chalk");
const archiver = require("archiver");
const recursive = require("recursive-readdir");
const prettyBytes = require("pretty-bytes");

const excludes = [
	".circleci",
	".DS_Store",
	".editorconfig",
	".eslintignore",
	".eslintrc.js",
	".git",
	".gitattributes",
	".github",
	".gitignore",
	".scripts",
	".stylelintrc.json",
	"*.zip",
	"composer.json",
	"composer.lock",
	"node_modules",
	"package-lock.json",
	"package.json",
	"phpcs.xml.dist",
	"vendor"
];

// Creates a file to stream archive data to.
// Uses the name in package.json, such as 'child-theme.1.1.0.zip'.
const slug = process.env.THEME_SLUG || process.env.npm_package_theme_textdomain;
const version = process.env.THEME_VERSION || process.env.npm_package_theme_version;
const fileName = process.env.VERSION_ARTIFACT_FILE || `${slug}.${version}.zip`;

const output = fs.createWriteStream(fileName);

const archive = archiver("zip", {
	zlib: { level: 9 } // Best compression.
});

/**
 * Sets up the file output stream and archive.
 */
const setupZipArchive = function() {
	// Listens for all archive data to be written.
	// Report the zip name and size, and rename *.txt files back to *.md again.
	output.on("close", function() {
		const fileSize = prettyBytes(archive.pointer());
		console.log(chalk`{cyan Created ${fileName}, ${fileSize}}`);

		renameTxtFilesToMarkdown();
	});

	// Displays warnings during archiving.
	archive.on("warning", function(err) {
		if (err.code === "ENOENT") {
			console.log(err);
		} else {
			throw err;
		}
	});

	// Catches errors during archiving.
	archive.on("error", function(err) {
		throw err;
	});

	// Pipes archive data to the file.
	archive.pipe(output);
};

/**
 * Rename files from *.md to *.txt.
 * Returns a promise so zip can be done once rename is complete.
 */
const renameMarkdownFilesToTxt = new Promise(function(resolve, reject) {
	console.log(chalk`{cyan Renaming .md files to .txt}`);
	["CHANGELOG.md", "README.md", "CONTRIBUTING.md"].forEach(function(file) {
		if (fs.existsSync(file)) {
			fs.renameSync(file, file.replace(".md", ".txt"));
		}
	});
	resolve("Success");
});

/**
 * Loops through theme directory, omitting files in the `exclude` array.
 * Adds each file to the zip archive.
 */
const zipFiles = function() {
	recursive(process.cwd(), excludes, function(err, files) {
		let relativePath;

		console.log(chalk`{cyan Making zip file}`);
		files.forEach(function(filePath) {
			relativePath = path.relative(process.cwd(), filePath);
			archive.file(filePath, {
				name: `${process.env.npm_package_name}/${relativePath}`
			});
		});

		archive.finalize();
	});
};

/**
 * Renames txt file to markdown.
 * Executed in the output stream close event.
 */
const renameTxtFilesToMarkdown = function() {
	console.log(chalk`{cyan Renaming .txt files to .md}`);
	["CHANGELOG.txt", "README.txt", "CONTRIBUTING.txt"].forEach(function(file) {
		if (fs.existsSync(file)) {
			fs.renameSync(file, file.replace(".txt", ".md"));
		}
	});
};

setupZipArchive();
renameMarkdownFilesToTxt.then(zipFiles);
