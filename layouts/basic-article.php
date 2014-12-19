<?php

require('components/coverimage.php');

// $stylesheet = 'assets/css/styles.a38a4712.css'; Override to declare an unique stylesheet

?>
<!DOCTYPE html>
	<?php
		require('partials/head.php');
	?>
	<body class="<?php echo $post->post_name; ?>">
	<?php

		require('partials/content.php');
		require('partials/footer.php');
		
	?>
	</body>
</html>
