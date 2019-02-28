<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ta
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero section">
				<div class="innerbox dark center">
					<img src="<?php echo get_stylesheet_directory_uri() . '/images/ta-adg-logo_white.png' ?>" />
					<div class="littlenav">
						<a href="#forsale">For Sale</a><a href="#wanted">Wanted</a>
					</div>
				</div>
				<div class="lower-arrow white"></div>
			</div>

			<div id="forsale" class="section">
				<div>

					<?php

					$sold = get_term_by('name', 'sold', 'post_tag');
					$forsaleCat = get_category_by_slug('for-sale');

					$args = array(
			      'post_type'       => 'aircraft',   // aircraft post type
			      'post_status'     => 'publish',    // we only want published posts
			      'tag__not_in'			=> array( $sold->term_id ),
						'cat'							=> $forsaleCat->term_id,
			      'orderby'         => 'date',      // we will sort posts by title
			      'order'           => 'ASC',        // ascending order
			      'nopaging'        => true
			    );

					$wp_query = new WP_Query( $args );

					if( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) : $wp_query->the_post();

							$aircraft_info = get_post_meta( $post->ID, 'aircraft_fields', true );

							echo '<div class="aircraft">';

								echo '<div class="pics" style="background-image: url(\'' . wp_get_attachment_url(get_post_meta( $post->ID, "gallery_image_01", true), "full") . '\')">';

									get_template_part('template-parts/aircraft-slider', 'Aircraft Slider');

								echo '</div>';

								echo '<div data-scroll class="info animate">';

								echo '<div class="basic-info">';
									echo '<h6>For Sale</h6>';
									echo '<h1>' . $aircraft_info['year'] . ' ' . $aircraft_info['make'] . ' ' . $aircraft_info['model'] . '</h1>';
									echo '<h3>SN: ' . $aircraft_info['serialnumber'] . ' | ' . $aircraft_info['regnumber'] . '</h3>';
								echo '</div>';

								echo '<div class="description">';
									the_content();
								echo '</div>';

								// echo $aircraft_info['totaltime'];
								// echo $aircraft_info['seats'];
								// echo $aircraft_info['location'];
								// echo $aircraft_info['price'];

								echo '<a class="button" href="' . $aircraft_info['pdf'] . '">Get Full Specs</a>';

								echo '</div>';

							echo '</div>';

						endwhile;
					endif;
					wp_reset_postdata();

					?>

				</div>
			</div>

			<div id="contact" class="contact section">
				<div data-scroll class="contact-tag light center big animate">
					<div class="thumb"></div>
					<div class="info">
						<p>Ready to Find Out More?</p>
						<h3><a href="/contact">Contact Us</a></h3>
						<h6><a href="#" data-featherlight="<h1>254-752-9731</h1>">254-752-9731</a> | <a href="mailto:sales@texasaero.com?subject=TexasAero.com%20Sales%20Inquiry">sales@texasaero.com</a></h6>
					</div>
				</div>
			</div>

			<div id="testimonials" class="section">
				<div data-scroll class="animate">
					<?php get_template_part('template-parts/testimonial-slider'); ?>
				</div>
				<div class="lower-arrow white"></div>
			</div>

			<div id="wanted" class="section">
				<div>

					<?php

					$sold = get_term_by('name', 'sold', 'post_tag');
					$forsaleCat = get_category_by_slug('wanted');

					$args = array(
			      'post_type'       => 'aircraft',   // aircraft post type
			      'post_status'     => 'publish',    // we only want published posts
			      'tag__not_in'			=> array( $sold->term_id ),
						'cat'							=> $forsaleCat->term_id,
			      'orderby'         => 'date',      // we will sort posts by title
			      'order'           => 'ASC',        // ascending order
			      'nopaging'        => true
			    );

					$wp_query = new WP_Query( $args );

					if( $wp_query->have_posts() ) :
						while ( $wp_query->have_posts() ) : $wp_query->the_post();

							$aircraft_info = get_post_meta( $post->ID, 'aircraft_fields', true );

							echo '<div class="aircraft">';

								echo '<div class="pics" style="background-image: url(\'' . wp_get_attachment_url(get_post_meta( $post->ID, "gallery_image_01", true), "full") . '\')">';

									get_template_part('template-parts/aircraft-slider', 'Aircraft Slider');

								echo '</div>';

								echo '<div class="info">';

								echo '<div class="basic-info">';
									echo '<h6>Wanted</h6>';
									echo '<h1>' . $aircraft_info['year'] . ' ' . $aircraft_info['make'] . ' ' . $aircraft_info['model'] . '</h1>';
									echo '<h3>SN: ' . $aircraft_info['serialnumber'] . ' | ' . $aircraft_info['regnumber'] . '</h3>';
								echo '</div>';

								echo '<div class="description">';
									the_content();
								echo '</div>';

								// echo $aircraft_info['totaltime'];
								// echo $aircraft_info['seats'];
								// echo $aircraft_info['location'];
								// echo $aircraft_info['price'];

								echo '<a class="button" href="' . $aircraft_info['pdf'] . '">Get Full Specs</a>';

								echo '</div>';

							echo '</div>';

						endwhile;
					else :
						echo '<center><h1>Wanted</h1><p>We are always looking to expand our inventory. Check back soon!</p></center>';
					endif;
					wp_reset_postdata();

					?>

				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
