# Genesis Sample Theme Changelog

## [2.9.0] - 2019-03-14
Requires Genesis 2.9.0+.

* Added: Additional pages are created during One-Click Theme Setup.
* Added: A menu is set up during One-Click Theme Setup.
* Added: Install and activate WPForms Lite, Genesis eNews Extended, and Simple Social Icons during One-Click Theme Setup.
* Changed: Added Customizer colors to the Block Editor color palette.
* Changed: Use `theme-primary` and `theme-secondary` slugs for Block Editor color palette to prevent possible loss of styling when switching themes. We are now using this convention for new StudioPress theme releases and updates and encourage theme developers to do the same.
* Changed: Removed gray colors from the Block Editor color palette.
* Changed: Generate inline styles for the Block Editor from theme supports, reducing manual Block Editor CSS required. See `lib/gutenberg/inline-styles.php` and https://github.com/studiopress/genesis-sample/pull/198.
* Changed: The default button block color is now blue and not gray.
* Changed: Combined all Block Editor config into a single file at `config/block-editor-settings.php`.
* Changed: Removed the XML sample content file. You can import sample content via One-Click Theme Setup by visiting `/wp-admin/admin.php?page=genesis-getting-started` instead.
* Changed: CSS adjustments including button, blockquote, latest posts block, and WPForms styling.
* Changed: improvements to CSS and PHP coding standards.

## [2.8.0] - 2019-01-16
Requires Genesis 2.8.0+.

* New: Block-based homepage layout.
* New: Auto homepage setup upon theme activation using the new onboarding feature from Genesis 2.8.0. (See `config/onboarding.php`.)
* New: “Blocks” page template for use with the block editor. The template removes the title and breadcrumbs, and forces a full-width layout.
* New: Load configuration with the new `genesis_get_config()` function from Genesis 2.8.0. (See `functions.php` and the `config/` folder.)
* New: Add `has-no-blocks` body class if singular post/page contains no blocks.
* New: Add `first-block-[block-name]` body class. Helps remove top padding when blocks such as the Cover block are first on the page.
* New: Add `first-block-align-[alignment]` body class. Helps adjust styles if the first block is full-width.
* Update: Styling adjustments for buttons, content width, and column blocks.
* Update: Prevent 'admin' user being created during manual XML demo content import.
* Update: Remove editor font sizes shortname from Gutenberg font sizes config. (The shortname is no longer used in WordPress.)
* Tools: Improve `npm run zip` command to create archives that unzip to a 'genesis-sample' folder on Windows.

## [2.7.1] - 2018-12-20
* Fix: Reinstate normalize.css and update to version 8.0.1.
* Fix: Reinstate Genesis Column Classes.
* Fix: Stop background hover color appearing for mobile menu-highlight button.

## [2.7.0] - 2018-12-12
* New: Add Gutenberg opt-in feature support (wide blocks, fonts, colors, editor and block styling).
* New: Add theme support for responsive media embeds.
* Update: General styling adjustments (remove rems for font size, center button text, responsive menu adjustments, use circles for unordered sublists).
* Update: WooCommerce styling adjustments, make mobile-first.
* Fix: Use custom logo height fallback of '1' if an SVG logo is used instead of a bitmap. (SVG support still has to be enabled in WordPress, which disables it by default.)
* Fix: Prevent featured images in Featured Posts widgets appearing at 75px square.
* Fix: Prevent JavaScript error if wp object is undefined.
* Fix: Prevent title overlaying custom logo when printing.
* Tools: Add npm scripts for automation. See https://github.com/studiopress/genesis-sample#npm-scripts.
* Tools: PHPCS and Composer improvements.

## [2.6.0] - 2018-03-22
* Fix product gallery bug in WooCommerce 3.0 update.
* Improve compliance with WordPress coding standards.
* Improve inline documentation.
* Add content_width for media width.
* Add logo width setting.
* Add mobile first CSS.
* Add Simple Social Icon defaults filter.
* Add development tools.
* Change custom header to custom logo.
* Update favicon design.
* Update theme tags.
* Update typography and style.
* Update XML demo content.
* Update responsive menu to 1.1.3.
* Update image size default functions for WooCommerce 3.3+.
* Remove menu toggle border.
* Remove unnecessary CSS vendor prefixes.

## [2.3.0] - 2017-01-30
* Add WooCommerce support to the theme and customizer.
* Add an updated and improved responsive menu script.
* Update the file structure.
* Update documentation.
* Update code standards.

## [2.2.4] - 2016-06-08
* Reorder font size on breadcrumbs.
* Add Changelog.
* Update to normalize.css 4.1.1.

## [2.2.3] - 2016-05-18
* Add accessibile mobile menu.
* Add accessibility support for the 404 Page.
* Add the custom header option to upload your own logo.
* Add customizer option for primary color.
* Add HTML5 support for gallery and captions.
* Add Enlarged Avatars.
* Add the After Entry Widget Area.
* Reposition the secondary navigation menu to the footer.
* Add theme defaults.
* Add Landing Page template.
* Add image size.
* Set localization.
* Update XML file.

[2.8.0]: https://github.com/copyblogger/genesis-sample/compare/2.7.1...2.8.0
[2.7.1]: https://github.com/copyblogger/genesis-sample/compare/2.7.0...2.7.1
[2.7.0]: https://github.com/copyblogger/genesis-sample/compare/2.6.0...2.7.0
[2.6.0]: https://github.com/copyblogger/genesis-sample/compare/2.3.0...2.6.0
[2.3.0]: https://github.com/copyblogger/genesis-sample/compare/2.2.4...2.3.0
[2.2.4]: https://github.com/copyblogger/genesis-sample/compare/2.2.3...2.2.4
[2.2.3]: https://github.com/copyblogger/genesis-sample/compare/014deb3689323b7bbd4ddbfff4f5f9279a38f741...2.2.3
