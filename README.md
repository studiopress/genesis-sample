# Genesis Sample Theme

Github project link: https://github.com/copyblogger/genesis-sample/


## Installation Instructions

1. Upload the Genesis Sample theme folder via FTP to your wp-content/themes/ directory. (The Genesis parent theme needs to be in the wp-content/themes/ directory as well.)
2. Go to your WordPress dashboard and select Appearance.
3. Activate the Genesis Sample theme.
4. Inside your WordPress dashboard, go to Genesis > Theme Settings and configure them to your liking.

## For Developers

The version of [Genesis Sample on GitHub](https://github.com/copyblogger/genesis-sample/) includes tooling to check code against WordPress standards. To use it:

1. Install Composer globally on your development machine. [See Composer setup steps](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable).
2. In the command line, change directory to the Genesis Sample folder.
3. Type the command `composer install` to install PHP development dependencies.
4. Type `composer phpcs` to run coding standards checks.

You'll see output highlighting issues with PHP files that do not conform to Genesis Sample coding standards.

### Packaging for distribution

1. Switch to the branch you plan to distribute.
2. Run `composer export` to zip all non-development files as `genesis-sample.zip`.

The `export` command is an alias for `git archive -o genesis-sample.zip HEAD`.

## Theme Support

Please visit https://my.studiopress.com/help/ for theme support.
