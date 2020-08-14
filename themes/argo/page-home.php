<?php
get_header();
?>
<header class="landing--header"> 
  <h1><?php the_field('intro_text'); ?></h1>
  <?php the_header_image_tag(); ?>
</header>


<main>
<h1>Testimonials</h1>


<?php 
  // Check rows exists.
  if( have_rows('testimonials') ):


      // Loop through rows.
      while( have_rows('testimonials') ) : the_row();

          // Load sub field value.
          $sub_value = get_sub_field('testimonial');
          echo $sub_value['name']."<br>";
          echo $sub_value['text']."<br>";
          echo $sub_value['linkedin_link']."<br>";
          // echo $sub_value['profilbild']."<br>";
          echo "<br>";
          echo "<br>";
          
      endwhile;

  // No value.
  else :
      // Do something...
  endif;

?>
</main>

<?php get_footer(); ?>

