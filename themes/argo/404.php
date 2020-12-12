<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Argo
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Fehler 404: Diese Seite existiert nicht.', 'argo' ); ?></h1>
			</header><!-- .page-header -->

			<div class="page-content">
				<p><?php esc_html_e( 'Es sieht ganz danach aus als würden die Ressourcen hier nicht mehr existieren. Vielleicht hat es diese Seite aber auch nie gegeben. Am besten besuchen Sie wieder eine der anderen Seiten und sollten Sie etwas vermissen, melden Sie sich gerne über die Kontaktseite.', 'argo' ); ?></p>
				
					<div class="wp-block-buttons">
					<div class="wp-block-button"><a class="wp-block-button__link" href="/">Zurück zur Startseite</a></div>
					</div>

					<div class="widget widget_categories">
						<h2 class="widget-title"><?php esc_html_e( 'Vielleicht werden Sie hier fündig:', 'argo' ); ?></h2>
						<ul>
							<?php
							wp_list_categories(
								array(
									'orderby'    => 'count',
									'order'      => 'DESC',
									'show_count' => 1,
									'title_li'   => '',
									'number'     => 10,
								)
							);
							?>
						</ul>
					</div><!-- .widget -->

					<?php
					/* Schlagwörter */
					the_widget( 'WP_Widget_Tag_Cloud' );
					?>

			</div><!-- .page-content -->
		</section><!-- .error-404 -->

	</main><!-- #main -->

<?php
get_footer();
