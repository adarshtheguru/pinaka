<?php
/**
 * Template Name: Case Study
 */
get_header();
?>
<main class="caseStudy" id="caseStudy">
    <section class="padding caseOverview" id="caseOverview">
		<div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/assets/images/placeholderVector.webp" alt="">
        </div>
        <div class="container">
            <div class="secPrefix">Casestudy</div>
            <div class="caseBox">
                <div class="partA">
                    <div class="secTitle">Where Innovation Meets Proven Results</div>
                    <p class="para">
                        Explore how our creative solutions and strategies have driven meaningful growth and transformed businesses into success stories.
                    </p>
                </div>
                <div class="partB">
                    <div class="caseGridBox">
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/assets/images/placeholderBlank.webp" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/assets/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/assets/images/placeholderBlank.webp" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/assets/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/assets/images/placeholderBlank.webp" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/assets/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/assets/images/placeholderBlank.webp" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/assets/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/assets/images/placeholderBlank.webp" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/assets/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="javascript:;" class="blankBtn">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">Want results that stand out?</div>
                <div class="secTitle">Select your objective , and we’ll craft the strategy:</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>