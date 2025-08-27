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
	<div class="container text-center">
		<div>
			<h2 class="secHeading"><?php echo nl2br($deliver_heading); ?></h2>
			<?php if ($deliver_content): ?>
				<div class="deliverContent"><?php echo $deliver_content; ?></div>
			<?php endif; ?>
		</div>
	</div>
</section>
<section class="padding scroll_section__wrapper service-project">
	<div class="container pos-rel">
		<svg class="customThread" width="723" height="1522" viewBox="0 0 723 1522" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M0.500244 1521.5C0.500244 1521.78 0.724243 1522 1.00024 1522C1.27625 1522 1.50024 1521.78 1.50024 1521.5H0.500244ZM721.5 0.5C721.224 0.500153 721 0.723952 721 1V113.51L721.001 113.521C721.486 125.424 720.914 140.664 717.096 152.942C715.187 159.08 712.478 164.441 708.718 168.279C704.97 172.105 700.162 174.434 693.995 174.5H42.0208C33.9392 174.171 23.8411 175.083 15.6204 178.98C7.36835 182.893 0.99823 189.829 0.501221 201.479L0.500244 201.489V631.5C0.500244 631.638 0.556885 631.763 0.647705 631.854V674.479C0.161682 686.422 0.728088 701.797 4.59692 714.239C6.5318 720.462 9.30408 725.987 13.2161 729.979C17.1402 733.985 22.197 736.431 28.6418 736.5H680.668C688.671 736.175 698.585 737.084 706.599 740.884C714.457 744.61 720.479 751.103 721.121 761.999L721.148 762.521V1100.65C721.057 1100.74 721 1100.86 721 1101V1213.51L721.001 1213.52C721.486 1225.42 720.914 1240.66 717.096 1252.94C715.187 1259.08 712.478 1264.44 708.718 1268.28C704.97 1272.1 700.162 1274.43 693.995 1274.5H42.0208C33.9392 1274.17 23.8411 1275.08 15.6204 1278.98C7.36835 1282.89 0.99823 1289.83 0.501221 1301.48L0.500244 1301.49V1521.5C0.503113 1521.5 0.539673 1521.5 1.00024 1521.5C1.45868 1521.5 1.49713 1521.5 1.50024 1521.5V1301.52L1.52661 1301C2.16913 1290.1 8.19092 1283.61 16.0491 1279.88C24.0632 1276.08 33.9772 1275.17 41.9797 1275.5H694.006C700.451 1275.43 705.508 1272.98 709.432 1268.98C713.344 1264.99 716.116 1259.46 718.051 1253.24C721.92 1240.8 722.486 1225.42 722 1213.48V1102.85C722.091 1102.76 722.148 1102.64 722.148 1102.5V762.489L722.147 762.479C721.65 750.829 715.28 743.893 707.028 739.98C698.807 736.082 688.709 735.171 680.627 735.5H28.6526C22.4861 735.434 17.6782 733.105 13.9299 729.279C10.1696 725.441 7.46051 720.08 5.552 713.942C1.73395 701.664 1.16229 686.424 1.64673 674.521L1.64771 674.51V562C1.64771 561.861 1.59131 561.736 1.50024 561.646V201.521L1.52661 200.999C2.16913 190.103 8.19092 183.61 16.0491 179.884C24.0632 176.084 33.9771 175.175 41.9797 175.5H694.006C700.451 175.431 705.508 172.985 709.432 168.979C713.344 164.987 716.116 159.462 718.051 153.239C721.92 140.797 722.486 125.422 722 113.479V1C722 0.723918 721.776 0.500098 721.5 0.5Z" fill="none" stroke="#003E63" stroke-width="2" />
		</svg>
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