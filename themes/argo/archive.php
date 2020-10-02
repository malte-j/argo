<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Argo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1>
				 	<?php single_term_title(); ?>
				</h1>
				
				<?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
			</header>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 * ", get_post_type()"
				 */
				$argo_cat = strtolower(single_cat_title('', false ));
				
				get_template_part( 'template-parts/archive-part', $argo_cat);

			endwhile;

			the_posts_navigation(array('prev_text'=>'<- Vorherige Einträge', 'next_text'=>'Nachfolgende Einträge ->'));

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main>

<?php
// get_sidebar();
get_footer();
