<?php
get_header();
?>
<header class="landing--header">
<h1><?php the_field('intro_text'); ?></h1>
</header>
<h1>some text:</h1>
cool.
<?php the_header_image_tag(); ?>
<p style="color: <?php the_field('services'); ?>"></p>

<?php get_footer(); ?>

