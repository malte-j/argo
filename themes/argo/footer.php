<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Argo
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-2',
									'menu_id'        => 'footer',
									'container'			 => false,
								)
							);
			?>
			<p>
				&copy 2020 Spacifik (haftungsbeschränkt)<br/>
				Gerichtstr. 19, DE 13347 Berlin <br/>
				Geschäftsführender Gesellschafter: Luis Rieke<br/>
				Amtsgericht Berlin-Charlottenburg - HRB 195740 B<br/>
				USt-ID: DE317616086.
			</p>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
