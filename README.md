Ixa WordPress Starter
=====================

WordPress project starter that works with [Composer] and [WP-CLI]

[Composer]: http://getcomposer.org/
[WP-CLI]: http://wp-cli.org/

## Installation

    $ composer create-project ixa/wordpress-starter <project-name> --prefer-dist
	$ cd <project-name>

This command clones _Ixa WordPress Starter_ and downloads all of its dependencies. It also ask your enviroment variables: database credentials and home_url.

If your database is ready you can install WordPress typing:

    $ composer wp-install 

If wp-cli prints a success message the installation is completed. You can use the PHP build in server to see your new site in <htpp://localhost:1234>

	$ composer serve


## Configuration

In _Ixa WordPress Starter_, `wp-config.php` file is not meant to hold configuration all constants are set by [Ixa WP-Config] and are located in `config` folder.

[Ixa WP-Config]: https://github.com/cesarhdz/ixa-wp-config

### `.env.yml` file

This file is dynamically created by Composer in every installation or update and must not be added to version control. The `env.yml.dist` is needed to tell Incenteev/ParameterHandler what variables are required and should not be modified.

## Default Theme

Ixa WordPress Starter ships with a default theme that contains only the welcome message you see after installation and is set in `wp-config.php` using `WP_DEFAULT_THEME` constant. You can override to register your theme, this way, no database configuration is needed and the app is more portable. 

### WP-CLI Scaffold

Using [WP-CLI] you can create a new theme with the scaffold command

	$ vendor/bin/wp scaffold _s <theme-name>

Then you have a new theme based on [Underscores] ready to start.

[Underscores]: http://underscores.me/


### Child Themes

Since we are using Composer, the recommended way to use child themes is to register the parent theme as dependency in `composer.json`, just make sure the project type is `wordpress-theme`, so that Composer Installer knows where to install it.

Note that if you want to register the child theme using `WP_DEFAULT_THEME` constant you must define `TEMPLATEPATH` as [this article] suggests.

[this article]: http://wpmututorials.com/how-to/change-the-default-theme-for-sites-without-a-plugin/

