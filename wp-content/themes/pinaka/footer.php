<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<footer>
	<div class="container">
		<div class="footerWrapper">
			<div class="partA">
				<div class="content">
					<div class="title">Stay Ahead in Real Estate Marketing</div>
					<p class="para">Sign up for our newsletter to receive the latest insights, tips, and industry news directly to your inbox.</p>
				</div>
				<div class="mailBox">
					<?php include 'customTemplates/subscribeMailForm.php'; ?>
				</div>
			</div>
			<div class="partB">
				<div class="companyInfo">
					<div class="logo">
						<img src="<?php echo THEMEURL; ?>/app/images/pinakaWhite.svg" alt="" class="img-responsive">
					</div>
					<p class="address">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry.
					</p>
					<div class="mail">
						<div class="arrow">
							<img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/whiteArrow.svg" alt="">
						</div>
						<a href="mailto:info@pinaka.digital">info@pinaka.digital</a>
					</div>
				</div>
				<div class="footerNavs">
					<div class="ql cols">
						<div class="title">Quick Links</div>
						<div class="navLinks">
							<a href="javascript:;">About Us</a>
							<a href="javascript:;">Clients</a>
							<a href="javascript:;">Services</a>
							<a href="javascript:;">Media Center</a>
							<a href="javascript:;">Casestudy</a>
							<a href="javascript:;">Contact Us</a>
						</div>
					</div>
					<div class="socials cols">
						<div class="title">Socials</div>
						<div class="navLinks">
							<a href="javascript:;">Linkedin</a>
							<a href="javascript:;">Twitter</a>
							<a href="javascript:;">Instagram</a>
						</div>
					</div>
					<div class="address cols">
						<div class="title">Address</div>
						<p>
							202, 2nd Floor, Vishnu Darshan Apartments, Fergusson College Rd, Rage Path, Model Colony, Shivajinagar, Pune, Maharashtra 411005
						</p>
					</div>
				</div>
			</div>
			<div class="partC">
				<div class="corpInfo">
					© 2024 Pinaka Digital Technologies
				</div>
				<div class="pagesInfo">
					<a href="jaavscript:;">Privacy Policy</a> | <a href="javascript:;">Terms & Conditions</a> | <a href="javascript:;">Refund Policy</a>
				</div>
			</div>
		</div>
	</div>
</footer>
	<div class="mob-footer visible-xs">
		<div class="row">
			<div class="col-6">
				<a href="tel:+911234567890" class="mob-call-btn"><span class="sell_do_virtual_numbers">+91 1234 5678
						90</span></a>
			</div>
			<div class="col-6">
				<a href="javascript:;" class="mob_enq_click mob-enq-btn" data-event-category="Footer"
					data-event-action="Click" data-event-name="Enquire Now">Enquire Now</a>
			</div>
		</div>
	</div>

	<?php wp_footer(); ?>

	<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.js"></script>
	<script src="<?php echo THEMEURL; ?>/assets/js/lenis-min.js"></script>
	<script src="<?php echo THEMEURL; ?>/assets/js/all.js"></script>

	</body>
</html>
