
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php 
		the_post_thumbnail('portfolio-square');
	?>

	<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	?>

	<?php
		the_excerpt();
	?>
</article>
