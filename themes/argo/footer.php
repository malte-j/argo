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
			$items_wrap = '<ul id="%1$s" class="%2$s">%3$s';
			$items_wrap .= "<li>
				<a>Unsere Daten</a>
				<ul class=\"sub-menu\">
					<li>Gerichtstr. 19, DE 13347 Berlin</li>
					<li>Geschäftsführer: Luis Rieke</li>
					<li>Berlin-Charlottenburg - HRB 195740 B</li>
					<li>USt-ID: DE317616086</li>
				</ul>
			</li>";
			$items_wrap .= "</ul>";
			wp_nav_menu(
				array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer',
					'container'			 => false,
					'items_wrap' => $items_wrap
				)
			);
			?>
			
			<p>&copy 2020 Spacifik UG (haftungsbeschränkt)</p>
	</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
