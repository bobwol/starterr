<?php

/*
*     
*     theme:        Starterr
*     rule:         post
*     name:         basic-article
*     description:  default layout
*     
*/

include(get_template_directory() .'/inc/pr_scripts.php');

$stylesheet = $assets['css'];
$javascript = $assets['js'];

require('components/coverimage.php');

// $stylesheet = 'assets/css/styles.a38a4712.css';

?>
<!DOCTYPE html>
	<?php
		require('partials/head.php');
	?>
	<body class="<?php echo $post->post_name; ?>">
	<?php
		require('partials/content.php');
	?>
	<script type="text/javascript" src="<?php echo $javascript; ?>"></script>
	</body>
</html>
