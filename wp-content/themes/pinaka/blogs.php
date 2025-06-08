<?php
/*
Template Name: Blog Listing
*/
get_header(); ?>

<!-- <main id="site-content" role="main">
    <div class="container">
        <h1>Blog Posts12112</h1>

        <?php
        $blog_query = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 10,
        ]);

        if ($blog_query->have_posts()) :
            while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            <?php endwhile;
            wp_reset_postdata();
        else :
            echo 'No posts found.';
        endif;
        ?>
    </div>
</main> -->


<main class="blogs" id="blogs">
    <section class="padding caseOverview" id="caseOverview">
		<div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <div class="secPrefix">Blogs</div>
            <div class="caseBox">
                <div class="partA">
                    <div class="secTitle">Sharing our Experience for your Curiosity</div>
                    <p class="para">
                        Crafting impactful creative solutions and strategies that drive meaningful brand presence and fuel lasting business growth.
                    </p>
                </div>
                <div class="partB">
                    <div class="caseGridBox">
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                        <div class="box">
                            <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                            <div class="dates">Sept 5, 2022</div>
                            <p class="abstract">
                                Pride World City takes homeownership celebrations to the next level with Casa Carnival, Pune’s biggest home-buying festival. 
                            </p>
                            <a href="javascript:;">
                                <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="javascript:;" class="blankBtn caseLoadBtn">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">Make your Results Unforgettable</div>
                <div class="secTitle">Tell us more about yourself, and we’ll do the rest</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>