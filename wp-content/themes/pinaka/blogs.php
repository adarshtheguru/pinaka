<?php
/*
Template Name: Blog Listing
*/
get_header(); ?>
<main class="blogs" id="blogs">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding caseOverview" id="caseOverview">
        <div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <!-- <div class="secPrefix">Blogs</div> -->
            <div class="caseBox">
                <div class="blogGridBox">
                            <?php
                            $all_posts = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 8
                            ]);
                            if ($all_posts->have_posts()):
                            while ($all_posts->have_posts()): $all_posts->the_post(); ?>
                            <div class="box">
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full', array('class' => 'img-full scroll-animate clip-reveal delay-2')); ?>
                                <?php else : ?>
                                    <img class="img-full scroll-animate clip-reveal delay-2" src="<?php echo THEMEURL; ?>/app/images/rectPlace.png" alt="">
                                <?php endif; ?>
                                <div class="blog-info  scroll-animate fade-in delay-2">
                                    <p class="abstract"><?php echo mb_strimwidth(get_the_title(), 0 , 90, '...' ); ?></p>
                                    <div class="dates"><?php echo get_the_date('M j, Y'); ?>  • <?php echo estimated_reading_time(get_the_content()); ?></div>
                                    <p class="small-desc"><?php echo mb_strimwidth(get_the_excerpt(), 0, 100, '...' ); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="read-more">
                                        Read More <img src="<?php echo THEMEURL; ?>/app/images/blog-arrow.svg" alt="">
                                    </a>
                                </div>
                            </div>
                            <?php endwhile;
                            wp_reset_postdata();
                            endif;
                            ?>
                        </div>
                        <div class="text-center">
                            <a href="javascript:;" class="blankBtn blogLoadBtn">LOAD MORE</a>
                        </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult bg-blue" id="wantResult">
        <div class="container">
            <div class="text-center  scroll-animate fade-in">
                <div class="secTitle text-white">Make your Results Unforgettable</div>
                <div class="secTitle text-white">Tell us more about yourself, and we’ll do the rest</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>