<?php
get_header();

// Intro
$intro_a        = get_field('intro_text_a');
$intro_b        = get_field('intro_text_b');

// Deliver Section
$deliver_heading = get_field('deliver_heading');
$deliver_content = get_field('deliver_content');
?>
<?php include 'customTemplates/heroSection.php' ?>

<section id="staticInfo" class="padding staticInfo">
	<div class="container">
		<div class="partA d-flex">
			<?php echo esc_html($intro_a); ?>
		</div>
		<div class="partB d-flex">
			<?php echo esc_html($intro_b); ?>
		</div>
	</div>
</section>
<section id="DeliverResult" class="padding DeliverResult">
	<div class="container text-white text-center">
		<div>
			<h2 class="secHeading"><?php echo nl2br($deliver_heading); ?></h2>
			<?php if ($deliver_content): ?>
				<div class="deliverContent"><?php echo $deliver_content; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="padding scroll_section__wrapper service-project">
	<div class="section_line_wrap">
		<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 485"  xml:space="preserve">
			<style type="text/css">
				.st0{fill:none;stroke:#666560;stroke-width:2;stroke-miterlimit:10;}
			</style>
			<polyline class="st0" points="97.5,0 97.5,476 0.5,476 " fill="transparent"></polyline>
			</svg>
	</div>
	<div class="container">
		<div class="col-12">
			<div class="col-5">
				<h2 class="sec-title">Websites are the undeniable MVP of your marketing strategy, and they must be done right.</h2>
				<p class="secPara">A website is the cornerstone of an effective marketing strategy for destinations, attractions, or places. It showcases your offerings and captures the essence of the experiences you provide.</p>
				<p>
					All roads should lead to your website. A well-crafted site is essential for showcasing your unique value proposition and offerings while creating a seamless conversion experience. It connects potential customers to everything you provide, highlighting your value effectively.
				</p>
			</div>
		</div>
		<div class="project-card-list justify-end col-12">
			<div class="col-7">
				<div class="project-card-info">
					<img src="<?php echo THEMEURL; ?>/app/images/computer.png" class="revealOnScroll img-responsive" data-animation="fadeInUp" data-timeout="200">
					<h3 class="revealOnScroll" data-animation="fadeInUp" data-timeout="200">You Need Tailored, More Customized Solutions</h3>
					<p class="revealOnScroll secPara" data-animation="fadeInUp" data-timeout="200">Looking for a fast, high-quality website to elevate your new brand or campaign?</p>
					<p>Sure, Our expertise lies in crafting bespoke, customized website designs that are strategically aligned with your organization’s growth objectives, particularly in the real estate sector. Whether your goal is to amplify brand recognition, generate high-quality leads, attract potential customers and partners, or recruit top talent, we are dedicated to building a website that seamlessly merges aesthetics with functionality. Let us help you create an online presence that captivates visitors and drives your success</p>
				</div>
			</div>
		</div>
		<div class="project-card-list col-12">
			<div class="col-6">
				<div class="project-card-info">
					<img class="revealOnScroll img-responsive pd-rt-30" data-animation="fadeInUp" data-timeout="200" src="<?php echo THEMEURL; ?>/app/images/tablets.png">
					<h3 class="revealOnScroll" data-animation="fadeInUp" data-timeout="200">You prioritize security and seek seamless, worry-free maintenance for peace of mind</h3>
					<p class="revealOnScroll secPara" data-animation="fadeInUp" data-timeout="200">Is website security non-negotiable for you? Do you require your website design to be effortlessly updatable?</p>
					<p>
						If that’s the case, and you’re tired of unresponsive website vendors who take weeks to make simple updates, Pinaka is the solution you need. We are recognized for our exceptional security track record, systematic upgrades, and lightning-fast responses to updates, edits, and support requests
					</p>
				</div>
			</div>
		</div>
		<div class="project-card-list scroll_card justify-end col-12">
			<div class="col-7">
				<div class="project-card-info">
					<img class="revealOnScroll img-responsive" data-animation="fadeInUp" data-timeout="200" src="<?php echo THEMEURL; ?>/app/images/laptop.png">
					<!-- <h3 class="revealOnScroll" data-animation="fadeInUp" data-timeout="200">Huntsville Botanical Garden</h3>
					<p class="revealOnScroll" data-animation="fadeInUp" data-timeout="200">Campaigns, Digital Advertising, Social Advertising</p>
					<a href="javascript:;" class="white-btn revealOnScroll" data-animation="fadeInUp" data-timeout="200">See the case study</a> -->
				</div>
			</div>
		</div>
		<!-- <div class="col-12 section_wrap_btm">

			<div class="section_line_wrap_btm">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 485" style="enable-background:new 0 0 100 485;" xml:space="preserve">
					<style type="text/css">
						.st2{fill:none;stroke:#666560;stroke-width:2;stroke-miterlimit:10;}
					</style>
					<polyline class="st2" points="97.5,0 97.5,476 0.5,476 " fill="transparent"></polyline>
				</svg>
			</div>
		</div> -->
	</div>
</section>
<!-- <section class="padding blueCards">
	<div class="container text-white">
		<div class="contentBox">
			<div class="partA">
				<h4 class="secPrefix text-white">
					What we do
				</h4>
				<div class="coloredTitle">
					Our Web <br> Development & <br> UX/UI Design
				</div>
			</div>
			<div class="partB">
				<div class="secHeading">
					Transforming a vision into a <br> powerful reality.
				</div>
				<p>We deliver an extensive suite of web development and UX/UI design services that ensure your website stands out with striking visuals while operating flawlessly</p>
			</div>
		</div>
		<div class="cardBox">
			<div class="box">
				<img src="<?php echo THEMEURL; ?>/app/images/neon1.svg" alt="">
				<h4 class="title">Custom Web Development Solutions</h4>
				<p>
					Our team crafts high-performance, secure, and fully tailored websites that are specifically designed to meet and exceed your business needs
				</p>
			</div>
			<div class="box">
				<img src="<?php echo THEMEURL; ?>/app/images/neon1.svg" alt="">
				<h4 class="title">User-Centric UX/UI Design</h4>
				<p>
					We prioritize the user in our design process, guaranteeing that every interaction with your website is not only intuitive and effortless but also engaging and enjoyable
				</p>
			</div>
			<div class="box">
				<img src="<?php echo THEMEURL; ?>/app/images/neon1.svg" alt="">
				<h4 class="title">Mobile-First and Responsive Design</h4>
				<p>
					Our websites are meticulously optimized for all devices, providing a seamless and consistent experience whether you're on a desktop, tablet, or mobile device
				</p>
			</div>
			<div class="box">
				<img src="<?php echo THEMEURL; ?>/app/images/neon1.svg" alt="">
				<h4 class="title">SEO and Performance-Optimized</h4>
				<p>
					Every website we build is crafted with SEO best practices as a fundamental focus, ensuring robust organic traffic and superior performance that elevate your online presence
				</p>
			</div>
		</div>
	</div> -->
	<section class="padding blueCards">
	<div class="container text-white">
		<div class="contentBox">
			<div class="partA">
				<?php if (get_field('prefix_title')): ?>
					<h4 class="secPrefix text-white">
						<?php the_field('prefix_title'); ?>
					</h4>
				<?php endif; ?>

				<?php if (get_field('main_title')): ?>
					<div class="coloredTitle">
						<?php the_field('main_title'); ?>
					</div>
				<?php endif; ?>
			</div>

			<div class="partB">
				<?php if (get_field('sub_title')): ?>
					<div class="secHeading">
						<?php the_field('sub_title'); ?>
					</div>
				<?php endif; ?>

				<?php if (get_field('description')): ?>
					<p><?php the_field('description'); ?></p>
				<?php endif; ?>
			</div>
		</div>

		<?php if (have_rows('what_we_do_service')): ?>
			<div class="cardBox">
				<?php while (have_rows('what_we_do_service')): the_row(); 
					$icon = get_sub_field('icon');
					$title = get_sub_field('title');
					$desc = get_sub_field('description');
				?>
					<div class="box">
						<?php if ($icon): ?>
							<img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
						<?php endif; ?>

						<?php if ($title): ?>
							<h4 class="title"><?php echo esc_html($title); ?></h4>
						<?php endif; ?>

						<?php if ($desc): ?>
							<p><?php echo esc_html($desc); ?></p>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
	<div class="blueCardSliderWrapepr pos-rel">
		<div class="blueCardSlider">
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc1.jpg" alt="Slide 1" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc2.jpg" alt="Slide 2" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc3.jpg" alt="Slide 3" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc1.jpg" alt="Slide 4" /></div>
			<div><img src="<?php echo THEMEURL; ?>/app/images/bc2.jpg" alt="Slide 5" /></div>
		</div>
		<div class="customArrow">
			<div id="bc-l-arrow">
				<img src="<?php echo THEMEURL; ?>/app/images/leftArrow.svg" alt="">
			</div>
			<div id="bc-r-arrow">
				<img src="<?php echo THEMEURL; ?>/app/images/rightArrow.svg" alt="">
			</div>
		</div>
	</div>
</section>
<section id="benefits" class="padding benefits">
    <div class="container">
        <div class="dataBox">
            <div class="partA">
                <?php if ($sec_prefix = get_field('why_choose_us_sec_prefix')) : ?>
                    <div class="secPrefix"><?php echo esc_html($sec_prefix); ?></div>
                <?php endif; ?>

                <?php if ($title = get_field('why_choose_us_title')) : ?>
                    <div class="title"><?php echo esc_html($title); ?></div>
                <?php endif; ?>

                <?php if ($description = get_field('why_choose_us_desciption')) : ?>
                    <p><?php echo esc_html($description); ?></p>
                <?php endif; ?>

                <?php if ($btn_text = get_field('button_text')) : 
                    $btn_link = get_field('button_link'); ?>
                    <a href="<?php echo esc_url($btn_link ?: 'javascript:;'); ?>" class="themeBtn">
                        <?php echo esc_html($btn_text); ?>
                    </a>
                <?php endif; ?>
            </div>

            <div class="partB">
                <?php if ($right_title = get_field('right_title')) : ?>
                    <div class="title"><?php echo esc_html($right_title); ?></div>
                <?php endif; ?>

                <?php if (have_rows('benefits_list')) : ?>
                    <ul>
                        <?php while (have_rows('benefits_list')) : the_row(); ?>
                            <li>
                                <?php if ($benefit_title = get_sub_field('benefit_title')) : ?>
                                    <strong><?php echo esc_html($benefit_title); ?> : </strong>
                                <?php endif; ?>

                                <?php if ($benefit_desc = get_sub_field('benefit_desc')) : ?>
                                    <?php echo esc_html($benefit_desc); ?>
                                <?php endif; ?>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section id="caseStudies" class="padding caseStudies">
	<div class="container">
		<div class="partA">
			<div class="title">Relevant Case Studies</div>
			<a href="javascript:;" class="themeBtn">See All CASE STUDIES</a>
		</div>
	</div>
		<div class="case-study-wrapper">
			<div class="case-study-slider">
				<div>
					<img src="<?php echo THEMEURL; ?>/app/images/cs1.jpg" alt="Case 1" />
					<p class="title">Huntsville Botanical Garden</p>
				</div>
				<div>
					<img src="<?php echo THEMEURL; ?>/app/images/cs2.jpg" alt="Case 1" />
					<p class="title">Huntsville Botanical Garden</p>
				</div>
				<div>
					<img src="<?php echo THEMEURL; ?>/app/images/cs1.jpg" alt="Case 1" />
					<p class="title">Huntsville Botanical Garden</p>
				</div>
				<div>
					<img src="<?php echo THEMEURL; ?>/app/images/cs2.jpg" alt="Case 1" />
					<p class="title">Huntsville Botanical Garden</p>
				</div>
				<div>
					<img src="<?php echo THEMEURL; ?>/app/images/cs1.jpg" alt="Case 1" />
					<p class="title">Huntsville Botanical Garden</p>
				</div>
			</div>
		</div>
</section>
<?php include 'customTemplates/footerGreen.php'; ?>
<?php get_footer(); ?>