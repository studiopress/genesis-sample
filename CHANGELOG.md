# Genesis Sample Theme Changelog

## [3.4.2] - 2022-12-19

### Changed
* Update developer dependencies. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)

### Fixed
* Add missing comma to WooCommerce styles.
* WP Forms one-click-theme-setup contact form creation.

### Removed
* Simple Social Icons and Genesis eNews extended from one-click-theme-setup.

## [3.4.1] - 2021-03-25

### Added
* Implement preconnect for Google Fonts.

### Changed
* Use null in place of theme version for Google Fonts URL.
* Optimize images included with the Black & White one-click theme setup option.
* Update developer dependencies. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)

### Fixed
* Improve Content Layout Shift (CLS) occurring when using a custom logo.
* Improve Content Layout Shift (CLS) caused by the mobile menu.

## [3.4.0] - 2020-10-20
Genesis Sample 3.4.0 requires the Genesis Blocks plugin.

### Changed
* Install Genesis Blocks instead of Atomic Blocks during one-click theme setup.
* Updated one-click-theme-setup content to use Genesis Blocks.
* Updated Editor and front-end styles for Genesis Blocks compatibility.

## [3.3.1] - 2020-08-17

### Added
* WordPress 5.5 block editor theme support for `custom-line-height`.
* WordPress 5.5 block editor theme support for `custom-units`.
* WordPress 5.5 HTML5 theme support for `navigation-widgets`.

### Changed
* Ensure front end paragraph margin matches the editor.
* Ensure block width in the editor matches the front end.

### Fixed
* Ensure the hamburger menu button icon and text CSS transitions match.

### Removed
* `genesis-lazy-load-images` theme support in favor of the WordPress 5.5 lazy loading feature.

## [3.3.0] - 2020-04-07
Requires WordPress 5.4 or higher.

### Added
* CSS to adjust left padding for WordPress 5.4 Social Icons.
* Editor styles to ensure theme colors work for inline text colors.
* Editor styles for WordPress 5.4 compatibility, including link color, buttons, headings, and lists.

### Changed
* Updated one-click theme setup content to include WordPress 5.4 button markup.
* Update developer dependencies. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)

### Removed
* Unused `light` heading class.

## [3.2.0] - 2019-11-13

### Added
* HTML5 supports for `scripts` and `styles` available in WordPress 5.3.
* Support for `genesis-lazy-load-images` available in Genesis 3.2.
* WordPress 5.3 alignment classes.
* Set post meta on theme activation.

### Changed
* Spacing between WooCommerce products.
* Block width CSS for nested blocks.
* Separator and hr styles to allow for block color options.
* CSS for image, gallery, and gallery item figcaptions.
* Add styles for new `blocks-gallery-grid` gallery class.
* CSS for tables for better consistency between editor and front end and to allow for new WordPress 5.3 settings.
* Allow footer widgets to be displayed on the landing page template.
* Set imported landing page meta to hide footer widgets. Requires Genesis 3.2 or higher.
* Update homepage content import to use Atomic Blocks Advanced Columns block.
* Update the phpcs config to exclude a PHP short array rule intended only for WordPress core.

### Fixed
* Ensure that the flexbox styles equally apply to the WooCommerce shop page and a page using the [products] shortcode.
* Ensure that general list styles do not apply to WooCommerce product blocks.

### Removed
* Squared button styles in favor of new button block border-radius setting.

## [3.1.0] - 2019-08-21
Requires Genesis 3.1.0+

### Added
* Starter Pack feature to allow imported content choices.
* Customizer Logo width validation and messaging.
* Featured image display options for singular posts and pages.
* Footer widget import with one-click theme setup.

### Changed
* Updated Screenshot to reflect one-click theme setup content.
* Set archive image size to genesis-singular-images on theme activation.
* Allow breadcrumbs and layout settings to be used on the landing page template.
* Use `genesis-custom-logo` functionality in place of `custom-logo`.
* Use PHP short array syntax.
* Update one-click theme setup content page meta to accommodate new Genesis 3.1 features.
* Add version number to zip files generated with `npm run zip`. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)
* Update the phpcs config to include a PHP short array rule and update PHP and WordPress testing versions. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)
* Update developer dependencies. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)
* Simplified `genesis_sample_secondary_menu_args` function.

### Removed
* Block page template in favor of new Genesis per-page settings.

## [3.0.1] - 2019-06-25
* Use current theme name instead of 'genesis-sample' when enqueueing assets. This ensures assets continue to load if the theme is renamed.

## [3.0.0] - 2019-06-19
Requires Genesis 3.0.0+.

### Added
* AMP support. (Optional, off by default, requires Genesis 3.0.0 and the [AMP plugin](https://wordpress.org/plugins/amp/).)
* New `composer run phpcbf` command to fix simple PHP linting violations. ([GitHub version](https://github.com/studiopress/genesis-sample/) only.)

### Changed
* Use `position: sticky` for the header and remove JavaScript that adjusted header height and content position. This prevents content reflow after page load.
* Reorganized config folder for easier reading and maintenance.
* Use new `genesis_get_theme_handle()` and `genesis_get_theme_version()` functions from Genesis 3.0.0 in place of declaring `CHILD_THEME_HANDLE` and `CHILD_THEME_VERSION` constants.
* Update developer dependencies.

### Fixed
* Improved block column CSS for WordPress 5.2+.

### Removed
* Responsive menu scripts have been replaced with `genesis_register_responsive_menus()`, which loads required JavaScript from Genesis 3.0.0.
* `genesis-responsive-viewport` theme support declaration. This is now added by default in Genesis 3.0.0.
* Deleted Genesis nav extras filter and metabox removal. These are no longer present in Genesis 3.0.0.
* `child-theme-settings-genesis.php` file and filter. Genesis 3.0.0 no longer includes a settings admin page or `genesis_theme_settings_defaults` filter. 
* `404-page` accessibility support, as this no longer has an effect.

## [2.10.0] - 2019-05-01
Requires Genesis 2.10.0+.

* Added: create a WPForms form during one-click theme setup and insert a WPForms block on the sample contact page.
* Added: remove link in hidden title when custom logo is in use for better accessibility.
* Changed: set full-width page layout for the Block Examples and About pages during one-click theme setup.
* Changed: improve styling of tables.
* Changed: improve editor button block styling.
* Changed: clarify wording of Customizer color labels.
* Changed: remove matchHeight script and use CSS flex instead to match heights of WooCommerce product lists.
* Fixed: WooCommerce shop pages now use the selected page layout instead of the default site layout on sites using object caching.
* Fixed: update the `npm run zip` script to prevent an issue with zip decompression for apps such as Path Finder. (npm scripts are available in the version of Genesis Sample on GitHub: https://github.com/studiopress/genesis-sample/).

## [2.9.1] - 2019-03-19
* Added: Contributing guidelines.
* Added: Tooling to lint JavaScript to WordPress coding standards (`npm run lint:js` and `npm run fix:js`).
* Added: GitHub issue templates (in the theme’s GitHub repository only).
* Added: `editor-style`, `block-styles` and `wide-blocks` Block Editor tags to theme stylesheet header.
* Changed: Fixed wide and full width table block styling to display correctly on the front end.
* Changed: Linted theme JavaScript to WordPress standards.
* Changed: Marked third party plugins with “(Third Party)” in `config/onboarding.php`.

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
* Add accessible mobile menu.
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

[3.0.1]: https://github.com/studiopress/genesis-sample/compare/3.0.0...3.0.1
[3.0.0]: https://github.com/studiopress/genesis-sample/compare/2.10.0...3.0.0
[2.10.0]: https://github.com/studiopress/genesis-sample/compare/2.9.1...2.10.0
[2.9.1]: https://github.com/studiopress/genesis-sample/compare/2.9.0...2.9.1
[2.9.0]: https://github.com/studiopress/genesis-sample/compare/2.8.0...2.9.0
[2.8.0]: https://github.com/studiopress/genesis-sample/compare/2.7.1...2.8.0
[2.7.1]: https://github.com/studiopress/genesis-sample/compare/2.7.0...2.7.1
[2.7.0]: https://github.com/studiopress/genesis-sample/compare/2.6.0...2.7.0
[2.6.0]: https://github.com/studiopress/genesis-sample/compare/2.3.0...2.6.0
[2.3.0]: https://github.com/studiopress/genesis-sample/compare/2.2.4...2.3.0
[2.2.4]: https://github.com/studiopress/genesis-sample/compare/2.2.3...2.2.4
[2.2.3]: https://github.com/studiopress/genesis-sample/compare/014deb3689323b7bbd4ddbfff4f5f9279a38f741...2.2.3
