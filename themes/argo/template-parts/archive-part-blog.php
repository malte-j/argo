<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Argo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("blog-preview");?> data-slide-in >
	<header class="entry-header">
		<div class="thumbnail">
			<?php argo_post_thumbnail(); ?>
		</div>
		
		<div class="title">
			<?php
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			?>
		</div>

	</header>
	

</article><!-- #post-<?php the_ID(); ?> -->
