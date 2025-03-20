<?php get_header() ?>
<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post() ?>
    
    <h1>Hello from index.php</h1>


    <?php endwhile ?>
<?php endif ?>
<?php get_footer() ?>