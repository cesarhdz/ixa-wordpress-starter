Ixa WordPress Starter
=====================

WordPress project starter that works with [Composer] and [WP-CLI]

[Composer]: http://getcomposer.org/
[WP-CLI]: http://wp-cli.org/

## Installation

Using `composer create-project` command the project and dependencies will be dowloaded

	composer create-project ixa/wordpress-starter --stability=dev [project-name]
	cd project-name

In order to be installed, WordPress needs the `wp-config.php` file, you can copy the `wp-config-sample.php` and make the necessary adjustments.

	cp wp-config-sample.php wp-config.php

Once `wp-config` file is ready, you can use [WP-CLI] to install WordPress. Asumming you have `wp` globally installed the following command will do the trick.

	wp core install --title=site-name --admin_email=user@mail.com --admin_password=qwerty

If wp-cli prompts a success message the installation is completed. So far Ixa WordPress Starter doesn't have a theme, so let's generate one with wp-cli

	wp scaffold _s theme
	wp activate theme

In development you can use the php build-in server, runing

	php -S localhost:4567

Your new site is now in <htpp://localhost:4567>



