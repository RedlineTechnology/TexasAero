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
				<div class="innerbox dark">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
					<div class="page-content">
						<?php if (have_posts()) {
							while (have_posts()) : the_post();
								the_content();
							endwhile;
						} ?>
					</div>
				</div>
				<div class="innerbox dark">
					<h5>Current Fuel Prices</h5>
					<?php
						echo '<p class="fuel">Jet A: ' . get_theme_mod('fuel_jeta') . '</p>';
						echo '<p class="fuel avfuel">Avgas: ' . get_theme_mod('fuel_avgas') . '</p>';
					?>
					<ul>
						<li>AV Fuel Contract</li>
						<li>CAA Fuel Program</li>
						<li>CJP Fuel Program</li>
						<li>Colt</li>
						<li>World Fuel</li>
						<li>UV Air Universal Weather</li>
						<li>Government Air Card</li>
						<li>AVTRIP Points Awarded for Contract Fuel</li>
					</ul>
				</div>
				<div class="lower-arrow white"></div>
			</div>

			<div id="reservations" class="section">
				<div>
					<div data-scroll class="animate form-wrapper">
						<h2>Make A Reservation</h2>
						<?php echo do_shortcode('[wpforms id="7"]'); ?>
					</div>
				</div>
				<div class="lower-arrow"></div>
			</div>

			<div id="testimonials" class="section">
				<div data-scroll class="animate">
					<?php get_template_part('template-parts/testimonial-slider'); ?>
				</div>
				<div class="lower-arrow white"></div>
			</div>

			<div id="maintenance" class="section">
				<div data-scroll class="animate innerImage left"></div>
				<div data-scroll class="animate">
					<h2>Maintenance</h2>
					<p>Texas Aero’s Maintenance Department works daily with the Aircraft Dealer Group on all types of turbine powered aircraft. We have experience on Challenger, Gulfstream, Citation, Lear Jet and Falcon aircraft along with many Turboprop and piston-powered aircraft.  With three Airframe and Powerplant technicians, one of whom is an IA, Texas Aero’s Maintenance Department can assist you with your AOG at Waco Regional and the surrounding airports, and we are always available for routine servicing of your aircraft.</p>
					<p>Texas Aero can handle all your AOG maintenance needs. We are happy to assist you! Please call Greg Halford to discuss your maintenance needs.</p>
					<div class="contact-tag">
						<div class="thumb"></div>
						<div class="info">
							<p>Contact Director of Maintenance</p>
							<h3>Greg Halford</h3>
							<h6><a href="#" data-featherlight="<h1>254-752-9731</h1>">254-752-9731</a> | <a href="mailto:ghalford@texasaero.com?subject=TexasAero.com%20Maintenance%20Inquiry">ghalford@texasaero.com</a></h6>
						</div>
					</div>
				</div>
				<div class="lower-arrow"></div>
			</div>

			<div id="charter" class="section">
				<div data-scroll class="animate innerbox center">
					<h2>Charter Flights</h2>
					<ul class="feature-list">
						<li><i class="fas fa-clock"></i>Available 24 Hours a Day</li>
						<li><i class="fas fa-map-marked-alt"></i>Over 5000 Airports Nationwide</li>
						<li><i class="fas fa-plane"></i>Jet Aircraft Available</li>
					</ul>
					<p>We offer a wide range of jet aircraft for you to choose from. Please contact us and let us know your needs.</p>
				</div>
				<div class="contact-tag dark">
					<div class="thumb"></div>
					<div class="info">
						<p>Contact Director of Operations</p>
						<h3>Tommy Miller</h3>
						<h6><a href="#" data-featherlight="<h1>254-752-9731</h1>">254-752-9731</a> | <a href="mailto:tmiller@texasaero.com?subject=TexasAero.com%20Charter%20Inquiry">tmiller@texasaero.com</a></h6>
					</div>
				</div>
				<div class="lower-arrow white"></div>
			</div>

			<div id="training" class="section">
				<div data-scroll class="animate">
					<h2>Flight Training</h1>
					<p>Texas Aero stocks a wide variety of pilot supplies and training material to suit the Private Pilot through Instrument and ATP including full U.S. coverage of current NOS VFR and IFR charts and publications.</p>
					<p>If we don’t have it, out friendly Customer Service agents will be glad to order whatever it may be.</p>
					<p>Interested in becoming a pilot?</p>
					<a data-scroll class="button red animate" href="/contact-us">Contact Us to Learn More</a>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
