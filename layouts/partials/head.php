<!DOCTYPE html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title><?php the_title(); ?></title>
		<meta name="format-detection" content="telephone=no">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<?php
			$get_assets = file_get_contents($pr_theme_url.'assets/manifest.json');
			$assets     = json_decode($get_assets, true);
			$stylesheet = '/assets/css/styles.' . $assets['assets/css/styles.min.css']['hash'].'.css';
			$script = '/assets/js/scripts.' . $assets['assets/js/scripts.min.js']['hash'].'.min.js';
		?>
		<link rel="stylesheet" href="<?php echo $stylesheet; ?>">
	</head>