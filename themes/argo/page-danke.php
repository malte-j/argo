<?php
get_header();
?>
<main>
<?php
while ( have_posts() ) :
	?>
  <header>
    <h1><?php the_title()?></h1>
  </header>

	<div class="class">
			<?php
						the_post();
						the_content();
					endwhile;
			?>
		</div>	

</main>

<?php get_footer(); ?>

