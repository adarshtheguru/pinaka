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
		<div class="row">
			<div class="col-12 lower">
				<div class="container">
					<div class="row">
						<div class="col-7 col-xs-12">
							<p>&copy; <span class="copyrightYear"></span>&nbsp;All Rights Reserved</p>
						</div>
						<div class="col-5 col-xs-12 text-right">
							<p>Marketed By: <a href="javascript:;" target="_blank">Adarsh</a></p>
						</div>
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

	<script src="https://code.jquery.com/jquery-3.7.0.js"
		integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
	<script src="<?php echo THEMEURL; ?>/assets/js/all.js"></script>

	</body>
</html>
