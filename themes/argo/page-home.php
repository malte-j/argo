<?php
get_header();
?>
<header class="landing--header"> 
  <h1><?php the_field('intro_text'); ?></h1>
  <?php the_header_image_tag(); ?>
</header>

<h1>Testimonials</h1>


<?php 

  // Check rows exists.
  if( have_rows('testimonials') ):

      // Loop through rows.
      while( have_rows('testimonials') ) : the_row();

          // Load sub field value.
          $sub_value = get_sub_field('testimonial');
          echo $sub_value['name'];
          // Do something...

      // End loop.
      endwhile;

  // No value.
  else :
      // Do something...
  endif;

?>
<p style="color: <?php the_field('services'); ?>"></p>

<?php get_footer(); ?>

