<?php
get_header();
?>

<header class="landing-header"> 
  <h1><?php the_field('intro_text'); ?></h1>
  <button>Durchstarten -></button>
  <?php the_header_image_tag(); ?>
</header>
<main>

  <?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content-page-home', get_post_type() );
		endwhile;
  ?>

</main>

<div class="testimonials">
  <h2 data-slide-in>Testimonials</h2>
  <div class="scroll">
    <?php 
      // Check rows exists.
      if( have_rows('testimonials') ):
          while( have_rows('testimonials') ) : the_row();
            echo "<div class='card' data-slide-in>";
            // Load sub field value.
              $sub_value = get_sub_field('testimonial');
              echo "<h3>".$sub_value['heading']."</h3>";
              echo "<p>".$sub_value['text']."</p>";
              echo "<div class='person'>";
                echo $sub_value['profilbild'];
                echo "<div>";
                echo "<p class='name'>".$sub_value['name']."</p>";
                echo "<p class='company'>".$sub_value['company']."</p>";
                echo "</div>";

                echo "<a href='".$sub_value['linkedin_link']."' target='_blank' rel='noopener noreferrer'>".file_get_contents(get_template_directory()."/media/linkedin.svg")."</a>";
              echo "</div>";
            echo "</div>";        
        endwhile;
      endif;
    ?>
  </div>
</div>

<?php
include get_template_directory() . '/inc/contact-us.php';
?>

<?php get_footer(); ?>

