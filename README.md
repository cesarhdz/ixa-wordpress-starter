Ixa WordPress Starter
=====================

WordPress project starter that works with [Composer] and [WP-CLI]

[Composer]: http://getcomposer.org/
[WP-CLI]: http://wp-cli.org/

## Installation

Using `composer create-project` command the project and dependencies will be dowloaded

	$ composer create-project ixa/wordpress-starter [project-name]
	$ cd project-name

In order to get WordPress installed, we need the environment variables which are set using [PHP dotenv]

	$ cp .env.example .env

Once `.env` file is ready, you can use [WP-CLI] to install WordPress. Asumming you have `wp` globally installed the following command will do the trick.

	$ wp core install --title=site-name --admin_email=user@mail.com --admin_password=qwerty

If wp-cli prompts a success message the installation is completed. You can use the PHP build in server to see your new site in <htpp://localhost:1234>

	$ php -S localhost:1234

[PHP dotenv]: https://github.com/vlucas/phpdotenv

## Default Theme

Ixa WordPress Starter ships with a default theme that contains only the welcome message you see after installation and is set in `wp-config.php` using `WP_DEFAULT_THEME` constant. You can override to register your theme, this way, no database configuration is needed and the app is more portable. 

### WP-CLI Scaffold

Using [WP-CLI] you can create a new theme with the scaffold command

	$ wp scaffold _s theme-name

Then you have a new theme based on [Underscores] ready to start.

[Underscores]: http://underscores.me/


### Child Themes

Since we are using Composer, the recommended way to use child themes is to register the parent theme as dependency in `composer.json`, just make sure the project type is `wordpress-theme`, so that Composer Installer knows where to install it.

Note that if you want to register the child theme using `WP_DEFAULT_THEME` constant you must define `TEMPLATEPATH` as [this article] suggests.

[this article]: http://wpmututorials.com/how-to/change-the-default-theme-for-sites-without-a-plugin/

