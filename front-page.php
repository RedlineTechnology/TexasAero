<?php
/**
 * Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ta
 */

get_header();
?>

<div class="hero row row-full full-frame">
	<div id="fbo_link" class="col-50 expand fbo">
		<a href="/fbo">
			<div class="mobile mobile-logo"></div>
			<h1>FBO<span></span></h1>
			<div class="lower">
				<i class="mobile fal fa-plane-arrival"></i>
				<i class="mobile-hidden fal fa-chevron-down"></i>
				<ul>
					<li>Fuel Prices</li>
					<li>Services</li>
				</ul>
			</div>
		</a>
	</div>
	<div id="adg_link" class="col-50 expand adg">
		<a href="/jet-sales">
			<div class="mobile mobile-logo"></div>
			<h1>JET SALES<span></span></h1>
			<div class="lower">
				<i class="mobile fal fa-plane-departure"></i>
				<i class="mobile-hidden fal fa-chevron-down"></i>
				<ul>
					<li>For Sale</li>
					<li>Wanted</li>
				</ul>
			</div>
		</a>
	</div>
	<div id="logo" class="logo"></div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->


	<script>
	jQuery(document).ready( function($){
			// Mobile Menu
			$("#fbo_link a").hover(function(e) {
				$("#logo").toggleClass( "left" );
				$('selector').css( 'cursor', 'pointer' );
			});
			$("#adg_link a").hover(function(e) {
				$("#logo").toggleClass( "right" );
				$('selector').css( 'cursor', 'pointer' );
			});
	});
	</script>

<?php
get_sidebar();
get_footer();
