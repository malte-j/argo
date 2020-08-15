<?php
get_header();
?>
<header class="landing--header"> 
  <h1><?php the_field('intro_text'); ?></h1>
  <?php the_header_image_tag(); ?>
</header>


<main>
<h1>Testimonials</h1>

<div class="testimonials">

<?php 
  // Check rows exists.
  if( have_rows('testimonials') ):


      // Loop through rows.
      while( have_rows('testimonials') ) : the_row();

          echo "<div>";

          // Load sub field value.
          $sub_value = get_sub_field('testimonial');
          echo "<it>".$sub_value['name']."</it><br>";
          echo $sub_value['text']."<br>";
          echo "<a href='".$sub_value['linkedin_link']."'>linkedin</a>";
          // echo $sub_value['profilbild']."<br>";
          echo "</div>";
          
          
      endwhile;

  // No value.
  else :
      // Do something...
  endif;

?>
</div>
</main>

<?php get_footer(); ?>

