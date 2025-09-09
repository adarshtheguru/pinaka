<?php
get_header();

// Intro
$intro_a        = get_field('intro_text_a');
$intro_b        = get_field('intro_text_b');

// Deliver Section
$deliver_heading = get_field('deliver_heading');
$deliver_content = get_field('deliver_content');
?>
<main class="servicePage">
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
<section class="padding scroll_section__wrapper service-project pos-rel">

	<svg class="topCenterThread" width="188" height="204" viewBox="0 0 188 204" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M187.5 1V203.5H1" stroke="#003E63" stroke-linecap="round"/>
	</svg>

	<div class="container pos-rel">
		<div class="col-12">
			<div class="col-5">
				<h2 class="sec-title"><?php the_field('left_section_title'); ?></h2>
				<p class="secPara"><?php the_field('left_section_subtitle'); ?></p>
				<p>
					<?php the_field('left_section_description'); ?>
				</p>
			</div>
		</div>
		<div class="project-card-list topThreadList justify-end col-12 pos-rel">

		<!-- <svg class="topThread" width="723" height="292" viewBox="0 0 723 292" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1.49996 0.5V113C0.529451 136.845 3.77695 174.229 29 174.5H681C697.084 173.846 721.025 178.139 722 201C722 208.6 722 257.5 722 291" stroke="#003E63" stroke-linecap="round"/>
		</svg> -->

		<svg class="topThread" width="418" height="404" viewBox="0 0 418 404" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M1 1V403.5H417.5" stroke="#003E63" stroke-linecap="round"/>
		</svg>


			<div class="col-7">
				<div class="project-card-info">
					<?php $left_img = get_field('left_section_image'); ?>
					<img src="<?php echo esc_url($left_img['url']); ?>" class="revealOnScroll img-responsive" data-animation="fadeInUp" data-timeout="200" alt="<?php echo esc_attr($left_img['alt']); ?>">
					<h3 class="revealOnScroll" data-animation="fadeInUp" data-timeout="200"><?php the_field('right_section_title'); ?></h3>
					<p class="revealOnScroll secPara" data-animation="fadeInUp" data-timeout="200"><?php the_field('right_section_subtitle'); ?></p>
					<p><?php the_field('right_section_description'); ?></p>
				</div>
			</div>
		</div>
		<div class="project-card-list bottomThreadList col-12 pos-rel">

			<!-- <svg class="bottomThread" width="723" height="432" viewBox="0 0 723 432" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M721.5 1V283.5C722.471 307.345 719.223 344.729 694 345H42.0002C25.9158 344.346 1.9755 348.639 1.00024 371.5C1.00024 379.1 1.00024 398 1.00024 431.5" stroke="#003E63" stroke-linecap="round"/>
			</svg> -->

			<svg class="bottomThread" width="418" height="574" viewBox="0 0 418 574" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M417.5 1V573.5H1" stroke="#003E63" stroke-linecap="round"/>
			</svg>


			<div class="col-6">
				<div class="project-card-info">
					<?php $right_img = get_field('right_section_image'); ?>
					<img class="revealOnScroll img-responsive pd-rt-30" data-animation="fadeInUp" data-timeout="200" src="<?php echo esc_url($right_img['url']); ?>" alt="<?php echo esc_attr($right_img['alt']); ?>">
					<h3 class="revealOnScroll" data-animation="fadeInUp" data-timeout="200"><?php the_field('last_section_title'); ?></h3>
					<p class="revealOnScroll secPara" data-animation="fadeInUp" data-timeout="200"><?php the_field('last_section_subtitle'); ?></p>
					<p>
						<?php the_field('last_section_description'); ?>
					</p>
				</div>
			</div>
		</div>
		<?php $last_img = get_field('last_card_image'); ?>
		<div class="project-card-list scroll_card justify-end col-12">
			<div class="col-7">
				<div class="project-card-info pos-rel">
					<img class="revealOnScroll img-responsive" data-animation="fadeInUp" data-timeout="200" src="<?php echo esc_url($last_img['url']); ?>" alt="<?php echo esc_attr($last_img['alt']); ?>">
				</div>
			</div>
		</div>
<!-- 		<div class="col-12 section_wrap_btm">

			<div class="section_line_wrap_btm">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 100 485" style="enable-background:new 0 0 100 485;" xml:space="preserve">
					<style type="text/css">
						.st2{fill:none;stroke:#666560;stroke-width:2;stroke-miterlimit:10;}
					</style>
					<polyline class="st2" points="97.5,0 97.5,476 0.5,476 " fill="transparent"></polyline>
				</svg>
			</div>
		</div>
 -->	</div>
</section>

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
	<!-- <div class="blueCardSliderWrapepr pos-rel">
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
	</div> -->
	<div class="blueCardSliderWrapepr pos-rel">
    <div class="blueCardSlider">
        <?php 
        $slides = get_field('blue_card_slider'); 
        if( $slides ): 
            foreach( $slides as $slide ): 
                // if gallery field return format = URL
                ?>
                <div>
                    <img src="<?php echo esc_url($slide); ?>" alt="Slide">
                </div>
            <?php 
            endforeach; 
        endif; 
        ?>
    </div>

    <div class="customArrow">
        <div id="bc-l-arrow">
            <img src="<?php echo THEMEURL; ?>/app/images/leftArrow.svg" alt="Left">
        </div>
        <div id="bc-r-arrow">
            <img src="<?php echo THEMEURL; ?>/app/images/rightArrow.svg" alt="Right">
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
</main>
<?php get_footer(); ?>