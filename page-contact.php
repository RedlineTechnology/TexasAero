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

$header_img = has_post_thumbnail() ? 'style="background-image: url(' . get_the_post_thumbnail_url($post->ID, "full") . ')"' : get_stylesheet_directory_uri() . '/assets/images/contact-hero.jpg';
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="hero section" <?php echo $header_img; ?>>
				<?php echo '<div><h1>' . get_the_title() . '</h1></div>'; ?>
			</div>

			<div id="upper" class="section">
				<div id="google_map">
					<iframe width="100%" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJIepjjSqbT4YR7ajUpIe3sq0&key=AIzaSyDHCQNgQ7NREbQxvecFaBux5P0lMa24wOE" allowfullscreen></iframe>
				</div>
				<div class="page-content">
					<div>
						<?php
						while (have_posts()) : the_post();
							the_content();
						endwhile;
						?>
					</div>
				</div>
			</div>

			<div id="lower" class="section">
				<div data-scroll class="innerbox light main animate">
					<h1><i class="fas fa-phone"></i> 254-752-9731</h1>
					<h3>FBO</h3>
					<h5><i class="fas fa-fax"></i> 254-752-6647</h5>
					<h5><i class="fas fa-envelope"></i> fbo@texasaero.com</h5>
					<h3>Jet Sales</h3>
					<h5><i class="fas fa-fax"></i> 254-754-5338</h5>
					<h5><i class="fas fa-envelope"></i> sales@texasaero.com</h5>
				</div>
				<div data-scroll="offset(0,15px)" class="innerbox light afterhours animate">
					<h2>After Hours:</h2>
					<h5>Tyler Smith</h5>
					<p>Line Service Manager<br />
					254-265-4115</p>
					<h5>Tommy Miller</h5>
					<p>Director of Operations<br />
					254-744-8718</p>
					<h5>Jeff Porter</h5>
					<p>V.P. Operations<br />
					254-744-4822</p>
				</div>
			</div>

			<div id="people" class="section">
				<div>
					<div data-scroll class="person animate">
						<h4>Billy Meyer</h4>
						<p>President Aircraft Sales<br />
							<a href="mailto:sales@texasaero.com?subject=TexasAero.com%20General%20Inquiry">sales@texasaero.com</a></p>
					</div>
					<div data-scroll="offset(0,15px)" class="person animate">
						<h4>Jeff Porter</h4>
						<p>V.P. Operations<br />
							<a href="mailto:jporter@texasaero.com?subject=TexasAero.com%20General%20Inquiry">jporter@texasaero.com</a></p>
					</div>
					<div data-scroll="offset(0,30px)" class="person animate">
						<h4>Tommy Miller</h4>
						<p>Director of FBO<br />
							<a href="mailto:tmiller@texasaero.com?subject=TexasAero.com%20General%20Inquiry">tmiller@texasaero.com</a></p>
					</div>
					<div data-scroll="offset(0,45px)" class="person animate">
						<h4>Greg Halford</h4>
						<p>V.P. Aircraft Maintenance<br />
							<a href="mailto:ghalford@texasaero.com?subject=TexasAero.com%20General%20Inquiry">ghalford@texasaero.com</a></p>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
