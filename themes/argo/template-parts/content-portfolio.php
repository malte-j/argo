
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> data-slide-in>
	
	<a href="<?php echo esc_url(get_permalink()) ?>">
		<?php the_post_thumbnail('portfolio-square'); ?>
	</a>

	<div class="info">
		<?php
			the_title( '<h2 class="entry-title">', '</h2>' );
		?>
		<div class="tags">
			<?php
				$tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'argo' ) );
				if ( $tags_list ) {
					echo $tags_list;
				}
			?>	
		</div>
	</div>
</article>
