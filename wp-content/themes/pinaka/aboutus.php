<?php
/**
 * Template Name: About Us
 */
get_header();
?>

<main class="aboutUs">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding aboutUsOverview pos-rel" id="aboutUsOverview">
        <div class="container">
            <div class="secPrefix">About Us</div>
            <div class="secTitle">
            Pinaka isn’t just a digital marketing agency—it’s a catalyst for brands that dare to lead. With strategy, creativity, and data-driven precision, we craft campaigns that spark engagement, maximize ROI, and build lasting Impact. We don’t follow trends—we set them, shaping brand legacies.
            </div>
            <p class="para">
            In a world where attention is fleeting, we create connections that last. At Pinaka Digital Technologies, we don’t just market—we tell stories, spark emotions, and turn strategies into success. By blending creativity with tech, we craft campaigns that speak to hearts and drive real results. This is where your brand transforms into impact.
            </p>
            <div class="circleBox pos-rel hidden-xs">
                <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/abtCircle.svg" alt="">
                <div class="floatingTxt vision">
                    <div class="title">Vision</div>
                    <p class="para">
                    To equip businesses with tech-infused marketing magic. We're on a mission to propel you into the digital stratosphere, where success isn't just a goal—it's the only destination.
                    </p>
                </div>
                <div class="floatingTxt mission">
                    <div class="title">Mission</div>
                    <p class="para">
                    We're on a mission to weave a digital tapestry that harmonizes every customer's journey, seamlessly connecting all touchpoints.
                    </p>
                </div>
            </div>
            <div class="circleBoxMob visible-xs">
                <div class="first">
                    <img src="<?php echo THEMEURL; ?>/app/images/firstCirc.svg" alt="">
                    <div class="textBox">
                        <div class="title">Vision</div>
                        <p class="para">
                        To equip businesses with tech-infused marketing magic. We're on a mission to propel you into the digital stratosphere, where success isn't just a goal—it's the only destination.
                        </p>
                    </div>
                </div>
                <div class="second pos-rel">
                    <img src="<?php echo THEMEURL; ?>/app/images/pShape.svg" alt="" class="Pshape">
                    <img src="<?php echo THEMEURL; ?>/app/images/secondCirc.svg" alt="">
                    <div class="textBox">
                        <div class="title">Mission</div>
                        <p class="para">
                        We're on a mission to weave a digital tapestry that harmonizes every customer's journey, seamlessly connecting all touchpoints.
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
</section>
<!--     <section class="padding pinakaJourney" id="pinakaJourney">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">
                    The PINAKA Journey
                </div>
                <p class="secPara">From Vision to Market Leader</p>
                <div class="jrnBox">
                    <img class="img-full hidden-xs" src="<?php echo THEMEURL; ?>/app/images/pinakaJrn.svg" alt="">
                    <img class="img-full visible-xs" src="<?php echo THEMEURL; ?>/app/images/pinakaJrnMob.svg" alt="">
                </div>
            </div>
        </div>
    </section> -->

<!--     <section class="backgroundVideo" id="backgroundVideo">
        <div class="video-wrapper">
            <img src="<?php echo THEMEURL; ?>/app/images/bgPlaceholder.jpg" alt="Video Placeholder" class="video-thumbnail img-full">
            <div class="play-button">
                <img src="<?php echo THEMEURL; ?>/app/images/redPlay.svg" alt="">
                <p class="text">
                    Background on Kailash Singh and Vijay Chotrani.
                </p>
            </div>
            <video class="video-content" controls>
                <source src="video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </section> -->

    <section class="padding ourTeam" id="ourTeam">
        <div class="container">
            <div class="text-center">
                <div class="secPrefix">Our Team</div>
                <div class="secTitle">
                    Lorem Ipsum is simply dummytext of the typesetting industry.
                </div>
            </div>
            <div class="ownerCards">
                <div class="card">
                    <div class="img">
                        <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/kailash.jpg" alt="">
                        <div class="profile-info info1">
                            <img src="<?php echo THEMEURL; ?>/app/images/quote-white.svg">
                            <p>With a background in ad tech and serving top-tier companies, our goal is to provide cutting-edge, tech-driven ad services. We aim to help clients not only meet their ROI targets but also stay ahead in the competitive landscape.</p>
                        </div>
                    </div>
                    <div class="data">
                        <div class="ownerInfo">
                            <div class="name">Kailash Singh</div>
                            <div class="desg">Co-Founder</div>
                        </div>
                        <div class="sm">
                            <a href="https://www.linkedin.com/in/kailashsingh/" target="_blank"><img class="" src="<?php echo THEMEURL; ?>/app/images/linkedin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/vijay.jpg" alt="">
                        <div class="profile-info info2">
                            <img src="<?php echo THEMEURL; ?>/app/images/quote-white.svg">
                            <p>At Pinaka, our essence lies in achieving client triumphs through united efforts. Guided by a culture of transparency, we cultivate an environment where client success takes center stage.</p>
                        </div>
                    </div>
                    <div class="data">
                        <div class="ownerInfo">
                            <div class="name">Vijay Chotrani</div>
                            <div class="desg">Co-Founder</div>
                        </div>
                        <div class="sm">
                            <a href="https://www.linkedin.com/in/vijaychotrani/" target="_blank"><img class="" src="<?php echo THEMEURL; ?>/app/images/linkedin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/Amit.jpg" alt="">
                        <div class="profile-info info3">
                            <img src="<?php echo THEMEURL; ?>/app/images/quote-white.svg">
                            <p>By fostering transparency and collaboration, we ensure that every client achieves their full potential with Pinaka Digital Technologies.</p>
                        </div>
                    </div>
                    <div class="data">
                        <div class="ownerInfo">
                            <div class="name">Amit Debnath</div>
                            <div class="desg">Business Head</div>
                        </div>
                        <div class="sm">
                            <a href="https://www.linkedin.com/in/amit0106/" target="_blank"><img class="" src="<?php echo THEMEURL; ?>/app/images/linkedin.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <section class="padding awards" id="awards">
        <div class="container">
            <div class="secPrefix">Awards & Recognition </div>
            <div class="awardBox">
                <div class="partA">
                    <div class="secTitle">Lorem Ipsum is simply dummy text of the printing.</div>
                    <p class="para">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is simply dummy.
                    </p>
                </div>
                <div class="partB awardSliderWrapper">
                    <div class="awardSlider">
                        <div class="slide">
                            <div class="box">
                                <div class="img">
                                    <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/starImg.png" alt="">
                                </div>
                                <div class="info">
                                    <span class="category">Category • </span>
                                    <span class="date">AUG 31 2024</span>
                                </div>
                                <p class="abstract">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="box">
                                <div class="img">
                                    <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/starImg.png" alt="">
                                </div>
                                <div class="info">
                                    <span class="category">Category • </span>
                                    <span class="date">AUG 31 2024</span>
                                </div>
                                <p class="abstract">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="box">
                                <div class="img">
                                    <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/starImg.png" alt="">
                                </div>
                                <div class="info">
                                    <span class="category">Category • </span>
                                    <span class="date">AUG 31 2024</span>
                                </div>
                                <p class="abstract">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                        </div>
                        <div class="slide">
                            <div class="box">
                                <div class="img">
                                    <img class="img-full" src="<?php echo THEMEURL; ?>/app/images/starImg.png" alt="">
                                </div>
                                <div class="info">
                                    <span class="category">Category • </span>
                                    <span class="date">AUG 31 2024</span>
                                </div>
                                <p class="abstract">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->
    <section class="padding awards" id="awards">
        <div class="container">
            <div class="col-6">
                <img src="<?php echo THEMEURL; ?>/app/images/our-culture.png" class="img-responsive">
            </div>
            <div class="col-1">&nbsp;</div>
            <div class="col-5">
                <div class="secPrefix">Awards & Recognition </div>
                    <div class="secTitle">Lorem Ipsum is simply dummy text.</div>
                    <p class="para mg-tp-30">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the is simply dummy.<br><br>

Sure, Our expertise lies in crafting bespoke, customized website designs that are strategically aligned with your organization’s growth objectives, particularly in the real estate sector. Whether your goal is to amplify brand recognition, generate high-quality leads, attract potential customers and partners, or recruit top talent.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="padding bg-blue about-client" id="client">
    <div class="container">
        <div class="clientCont">
            <div class="col-5 text-left-xs">
                <div class="secPrefix text-white">Our Clients</div>
                <div class="secTitle mg-bt-20 text-white">Grow your inner circle. </div>
            </div>
            <div class="gridBoxs col-7">
                <div class="clientSlider4 col-4">
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client1.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client2.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client3.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client4.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client5.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client6.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client7.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client8.png" alt="">
                    </div>
                </div>
                <div class="clientSlider5 col-4">
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client9.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client10.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client11.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client12.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client13.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client14.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client15.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client16.png" alt="">
                    </div>
                </div>
                <div class="clientSlider6 col-4">
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client17.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client18.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client19.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client20.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client21.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client22.png" alt="">
                    </div>
                    <div class="box">
                        <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/client23.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <section class="padding whitePanel" id="whitePanel">
        <div class="container">
            <div class="panelBox">
                <div class="box">
                    <div class="icon">
                        <img src="<?php echo THEMEURL; ?>/app/images/handshake.svg" alt="">
                    </div>
                    <p class="text">Let's Build Something Extraordinary Together</p>
                    <a href="javascript:;" class="anchor"><span>Start the Conversation</span><span><img src="<?php echo THEMEURL; ?>/app/images/greaterThan.svg" alt=""></span> </a>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="<?php echo THEMEURL; ?>/app/images/stocks.svg" alt="">
                    </div>
                    <p class="text">See How We Drive Results</p>
                    <a href="javascript:;" class="anchor"><span>Start the Conversation</span><span><img src="<?php echo THEMEURL; ?>/app/images/greaterThan.svg" alt=""></span> </a>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="<?php echo THEMEURL; ?>/app/images/bulb.svg" alt="">
                    </div>
                    <p class="text">Join the Leading Edge of Marketing Innovation</p>
                    <a href="javascript:;" class="anchor"><span>Start the Conversation</span><span><img src="<?php echo THEMEURL; ?>/app/images/greaterThan.svg" alt=""></span> </a>
                </div>
                <div class="box">
                    <div class="icon">
                        <img src="<?php echo THEMEURL; ?>/app/images/arrows.svg" alt="">
                    </div>
                    <p class="text">Take the First Step Toward Better Marketing</p>
                    <a href="javascript:;" class="anchor"><span>Start the Conversation</span><span><img src="<?php echo THEMEURL; ?>/app/images/greaterThan.svg" alt=""></span> </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'customTemplates/footerGreen.php'; ?>

<?php get_footer(); ?>