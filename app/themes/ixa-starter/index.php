<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php the_title() ?></title>
	<link rel="stylesheet" href="//cdn.jsdelivr.net/foundation/5.0.2/css/foundation.min.css">

	<style>
		main {
			max-width: 40em;
			margin:3em auto;
			padding:1em 2em;
		}

		pre{ 
			margin:2em 1em; 
		}

		code{ 
			color: gray;
			font-weight: 400;
			padding:0 .5em;
		}
	</style>
</head>
<body>
	<main>
		<h1>Ixa WordPress is Ready</h1>
		<hr />
		<p>You are using <a href="http://github.com/cesarhdz/ixa-wordpress-starter#default-theme">Ixa WordPress Starter</a> which is the default theme and is located in: </p>
		<pre><code><?php echo get_template_directory() ?></code></pre>
		<p>This isn't a real theme so feel free to edit or delete it. You can override the default theme in <code>wp-config.php</code> file through <code>WP_DEFAULT_THEME</code> variable.</p>
		<ul>
			<li><a href="<?php echo admin_url() ?>">WP Admin</a></li>
			<li><a href="http://github.com/cesarhdz/ixa-wordpress-starter">Ixa WordPress Starter</a></li>
		</ul>
	</main>
</body>
</html>	