<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<main class="aboutUs">
    <section class="section-first bg-cover home-banner hero pos-rel" id="hero">
        <div class="bannerCont dynamicPadLeft">
                <div class="content">
                    <div class="mainTitle">Shaping stories that create culture</div>
                    <p class="para">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    <div class="ctas">
                        <a href="javascript:;" class="themeBtn">Explore About us</a>
                    </div>
                </div>
                <div class="imgBox">
                    <img class="img-responsive" src="<?php echo THEMEURL; ?>/assets/images/aboutUsBanner.webp" alt="">
                </div>
        </div>
        <div class="scrollDownWrapper">
            <div class="pos-rel">
                <img class="img-responsive" src="<?php echo THEMEURL; ?>/assets/images/scrollPatch.svg" alt="">
                <img src="<?php echo THEMEURL; ?>/assets/images/arrowBot.svg" alt="" class="sdArrow img-responsive">
            </div>
        </div>		
    </section>
    <section class="padding aboutUsOverview pos-rel" id="aboutUsOverview">
        <div class="container">
            <div class="secPrefix">About Us</div>
            <div class="secTitle">
            Pinaka emerged as the visionary creation of industry maestros Kailash Singh and Vijay Chotrani, boldly delving into the realm of real estate marketing. Recognizing a crucial void in technology within this dynamic arena, they have strategically brought cutting-edge innovations to the forefront.
            </div>
            <p class="para">
            Their on-field research not only fueled insights but also sparked the conception of a game-changing, cost-effective CRM solution – introducing Brahmastra. In the intricate dance of real estate, Pinaka not only orchestrates captivating marketing strategies but also introduces the transformative power of Brahmastra, your key to streamlined efficiency in customer relationship management.
            </p>
            
        </div>
</section>
    <section class="padding pinakaJourney" id="pinakaJourney">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">
                    The PINAKA Journey
                </div>
                <p class="secPara">From Vision to Market Leader</p>
            </div>
        </div>
    </section>
    <section class="padding">
        <div class="container">
            <div class="text-center">
                <div class="secPrefix">Our Team</div>
                <div class="secTitle">
                    Lorem Ipsum is simply dummytext of the typesetting industry.
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'customTemplates/footerGreen.php'; ?>

<?php get_footer(); ?>