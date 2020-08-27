<?php
get_header();
?>

<main id="primary" class="site-main site-portfolio">

  <?php if (have_posts()) : ?>

    <header class="page-header">
      <h1>Unser Portfolio</h1>
    </header><!-- .page-header -->

    <div class="portfolio">

      <?php
      /* Start the Loop */
      while (have_posts()) :
        the_post();

            /*
          * Include the Post-Type-specific template for the content.
          * If you want to override this in a child theme, then include a file
          * called content-___.php (where ___ is the Post Type name) and that will be used instead.
          */
            get_template_part('template-parts/content-portfolio', get_post_type());

          endwhile;

          the_posts_navigation();

        else :

          get_template_part('template-parts/content', 'none');

        endif;
      ?>
      
    </div>

</main><!-- #main -->

<?php
get_footer();
