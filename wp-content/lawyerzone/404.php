<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Acme Themes
 * @subpackage Lawyer Zone
 */
get_header();
global $lawyer_zone_customizer_all_values;
?>
<div class="wrapper inner-main-title">
	<?php
	echo lawyer_zone_get_header_normal_image();
	?>
	<div class="container">
		<header class="entry-header init-animate">
			<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'lawyer-zone' ); ?></h1>
			<?php
			if( 1 == $lawyer_zone_customizer_all_values['lawyer-zone-show-breadcrumb'] ){
				lawyer_zone_breadcrumbs();
			}
			?>
		</header>
	</div>
</div>
<div id="content" class="site-content container clearfix">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<div class="page-content">
					<div class="row">
						<div class="col-md-5 col-sm-5">
							<h1><?php esc_html_e('404','lawyer-zone'); ?></h1>
						</div>
						<div class="col-md-7 col-sm-7">
							<div class="error-content">
								<h3>
									<?php esc_html_e('Sorry! We could not found that page','lawyer-zone'); ?>
									
								</h3>
								<p>
								<?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'lawyer-zone' ); ?>
								</p>
								<?php get_search_form(); ?>
							</div>
						</div>
					</div>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- #content -->
<?php get_footer();