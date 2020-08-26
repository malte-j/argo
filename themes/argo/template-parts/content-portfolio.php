
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-slide-in>
	<a href="<?php echo esc_url(get_permalink()) ?>">
	<?php 
		the_post_thumbnail('portfolio-square');
	?>

	<div class="info">
		<?php
			the_title( '<h2 class="entry-title">', '</h2>' );
		?>

		<?php
			the_excerpt();
		?>	
	</div>
	</a>
</article>
