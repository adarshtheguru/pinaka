<?php
/**
 * Template Name: Career
 */
get_header();
?>
<main class="career">
    <section class="section-first bg-cover home-banner hero pos-rel" id="hero">
        <div class="container">
            <div class="bannerCont">
                <div class="content">
                    <div class="mainTitle">Be part of our visionary team shaping the future.</div>
                    <p class="para">Work alongside visionaries and innovators to bring groundbreaking ideas to life.</p>
                    <div class="ctas">
                        <a href="javascript:;" class="themeBtn">All Available positions</a>
                        <a href="javascript:;" class="blankBtn">Our Social Media</a>
                    </div>
                </div>
                <!-- <div class="imgBox">
                    <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/bannerImg.png" alt="">
                </div> -->
            </div>
        </div>
        <div class="scrollDownWrapper">
            <div class="pos-rel">
                <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/scrollPatch.svg" alt="">
                <img src="<?php echo THEMEURL; ?>/app/images/arrowBot.svg" alt="" class="sdArrow img-responsive">
            </div>
        </div>		
    </section>
    <section class="padding careerOv" id="careerOv">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">Be part of our visionary team shaping the future.</div>
                <p class="para">
                    Work alongside visionaries and innovators to bring groundbreaking ideas to life.
                </p>
            </div>
            <div class="ovBox">
                <div class="box boxa">
                    <img src="<?php echo THEMEURL; ?>/app/images/careerSample.png" alt="" class="img-full">
                </div>
                <div class="box boxb">
                    <img src="<?php echo THEMEURL; ?>/app/images/c2.png" alt="" class="img-full">
                </div>
                <div class="box boxc">
                    <img src="<?php echo THEMEURL; ?>/app/images/careerSample.png" alt="" class="img-full">
                </div>
                <div class="box boxd">
                    <img src="<?php echo THEMEURL; ?>/app/images/careerSample.png" alt="" class="img-full">
                </div>
                <div class="box boxe">
                    <img src="<?php echo THEMEURL; ?>/app/images/c3.png" alt="" class="img-full">
                </div>
                <div class="box boxf">
                    <img src="<?php echo THEMEURL; ?>/app/images/c4.png" alt="" class="img-full">
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'customTemplates/footerGreen.php'; ?>
<?php get_footer(); ?>