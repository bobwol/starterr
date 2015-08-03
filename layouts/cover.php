<?php

/* ==========================================================================
   COVER TEMPLATE 
   ========================================================================== */

    $posts = pr_get_edition_posts( $edition, true );
    $layout = 'cover';

?>
<!DOCTYPE html>
    <?php
        include(locate_template('layouts/partials/head.php'));
    ?>
    <body class="<?php echo $layout.' '.$post->post_name; ?>">
        <div class="cover-wrapper">
    <?php

        include(locate_template('layouts/partials/header.php'));

        include(locate_template('layouts/partials/cover/content.php'));

        include(locate_template('layouts/partials/cover/footer.php'));

    ?>
        </div>
    </body>
</html>