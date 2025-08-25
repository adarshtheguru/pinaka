<?php
/**
 * Template Name: Contact Us
 */
get_header();
?>
<main class="contactUs" id="contactUs">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding contactUsOv" id="contactUsOv">
		<div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <!-- <div class="secPrefix">Contact Us</div> -->
            <div class="caseBox">
                <div class="partA">
                    <div class="secTitle">Join our Journey</div>
                    <p class="para">
                        Partner with us to blend creative thinking and smart strategy for results that truly stand out.
                    </p>
                </div>
                <div class="partB">
                    <?php include 'customTemplates/contactUsForm.php'; ?>
                    <div class="adBox" style="display:block!important;">
                        <div class="layer layerA">
                            <div class="title">Address</div>
                            <p class="address">
                                202, Vishnu Darshan Apartments,
                                Fergusson College Rd, Rge Path, Model Colony,
                                Shivajinagar, Pune, Maharashtra 411005
                            </p>
                            <a href="javascript:;" class="goldenLink">get Directions</a> &nbsp;<img src="<?php echo THEMEURL; ?>/app/images/goldenArrow.svg" alt="">
                        </div>
                        <div class="layer layerB">
                            <div class="title">Phone</div>
                            <div class="numbers">
                                <div><img width="20" src="<?php echo THEMEURL; ?>/app/images/indiaFlag.png" alt="" class="flag">&nbsp;&nbsp;<a href="tel:+917498044954" class="phone">91-7498044954</a></div>
                            </div>
                            <div class="numbers">
                                <div><img width="20" src="<?php echo THEMEURL; ?>/app/images/usaFlag.png" alt="" class="flag">&nbsp;&nbsp;<a href="tel:+13202896184" class="phone">1-3202896184</a></div>
                            </div>
                        </div>
                        <div class="layer layerC">
                            <div class="title">Email</div>
                            <a href="mailto:testtt" class="address">
                                sales@pinaka.digital
                            </a>
                        </div>
                        <div class="layer layerD">
                            <div class="title">SOCIALIZE WITH US</div>
                            <div class="icons">
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/fb.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/li.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/insta.svg" alt=""></a>
                                <a href="javascript:;"> <img src="<?php echo THEMEURL; ?>/app/images/twitterblue.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="partC">
                    <div class="iframeWrapper">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3783.0068674524355!2d73.84283719999999!3d18.528591799999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bfadcc441c05%3A0x16792491fd7455ab!2sPinaka%20Digital%20Technologies!5e0!3m2!1sen!2sin!4v1756153682505!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>