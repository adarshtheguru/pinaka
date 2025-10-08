<?php /* Template Name: Services */
get_header();
?>
<?php include 'customTemplates/heroSection.php' ?>
<section class="padding services" id="services">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="secPrefix">Services</div>
			</div>
			<div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
				<div class="col-5 col-xs-12 pd-rt-30 pd-bt-30">
					<h3 class="main-title">Performance</h3>
					<p class="services-desc">We designed a data-driven performance marketing campaign powered.</p>
				</div>
				<div class="col-7  col-xs-12">
					<div class="service-list">
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/media-strategy.png">
							<div class="services-title">
								<h4>Media Strategy</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/dsm.png">
							<div class="services-title">
								<h4>Digital Social Marketing</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
				<div class="col-5 col-xs-12 pd-rt-30  pd-bt-30">
					<h3 class="main-title">Organic Marketing</h3>
					<p class="services-desc">We designed a data-driven performance marketing campaign powered.</p>
				</div>
				<div class="col-7 col-xs-12">
					<div class="service-list">
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/organic-marketing.png">
							<div class="services-title">
								<h4>Organic Search</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/SMM.png">
							<div class="services-title">
								<h4>Social Media Marketing</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
				<div class="col-5 col-xs-12  pd-bt-30 pd-rt-30">
					<h3 class="main-title">Tech</h3>
					<p class="services-desc">We designed a data-driven performance marketing campaign powered.</p>
				</div>
				<div class="col-7 col-xs-12">
					<div class="service-list">
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/WD.png">
							<div class="services-title">
								<h4>Website Development</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/UX-UI.png">
							<div class="services-title">
								<h4>UX/UI Designs</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
				<div class="col-5 col-xs-12  pd-bt-30 pd-rt-30">
					<h3 class="main-title">PR Services</h3>
					<p class="services-desc">We designed a data-driven performance marketing campaign powered.</p>
				</div>
				<div class="col-7 col-xs-12">
					<div class="service-list">
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/PR-Service.png">
							<div class="services-title">
								<h4>Public Relations & Influencer</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 pd-tp-30 pd-bt-30 br-bt-1">
				<div class="col-5  pd-bt-30 col-xs-12 pd-rt-30">
					<h3 class="main-title">Brand Design</h3>
					<p class="services-desc">We designed a data-driven performance marketing campaign powered.</p>
				</div>
				<div class="col-7 col-xs-12">
					<div class="service-list">
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/Branding.png">
							<div class="services-title">
								<h4>Branding</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
						<div class="services-item">
							<img src="<?php echo THEMEURL; ?>/app/images/Graphic-Design.png">
							<div class="services-title">
								<h4>Graphic & Motion Design</h4>
								<a href="javascript:;"><img src="<?php echo THEMEURL; ?>/app/images/service-cta.svg"></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<?php
// Query all case studies
$args = [
    'post_type'      => 'case_study',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
];

$query = new WP_Query($args);

if ($query->have_posts()) : ?>
    <section id="caseStudies" class="padding caseStudies pd-tp-5">
        <div class="container">
            <div class="partA">
                <div class="title">Case Studies</div>
                <a href="<?php echo get_post_type_archive_link('case_study'); ?>" class="themeBtn">See All CASE STUDIES</a>
            </div>
        </div>

        <div class="case-study-wrapper">
            <div class="case-study-slider">
                <?php while ($query->have_posts()) : $query->the_post();
                    $image_id  = get_field('service_thumbnail_image', get_the_ID());
                    $image_url = wp_get_attachment_image_url($image_id, 'full'); ?>
                    
                    <div class="case-study-item">
                        <a href="<?php the_permalink(); ?>">
                            <?php if ($image_url): ?>
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" />
                            <?php endif; ?>
                            <p class="title"><?php the_title(); ?></p>
                        </a>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </section>
<?php
endif;
wp_reset_postdata();
?>


<?php include 'customTemplates/footerGreen.php'; ?>
<?php get_footer(); ?>