<?php
/**
* Template Name: Case Study
*/
get_header();
?>
<main class="caseStudy" id="caseStudy">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding caseOverview" id="caseOverview">
        <div class="watermark">
            <img class="img-responsive" src="<?php echo THEMEURL; ?>/app/images/placeholderVector.png" alt="">
        </div>
        <div class="container">
            <div class="secPrefix">Our Work</div>
            <div class="caseBox">
                <div class="partA">
                    <div class="secTitle">I want to see...</div>
                    <p class="para">
                        <select>
                            <option>SEO</option>
                            <option>Web Developement</option>
                            <option>Performance</option>
                        </select>
                    </p>
                </div>
                <div class="partB">
                    <div class="caseGridBox">
                        <?php
                        $args = [
                        'post_type'      => 'case_study',
                        'posts_per_page' => 6, // Change to -1 for all
                        'post_status'    => 'publish',
                        ];
                        $query = new WP_Query($args);
                        if ($query->have_posts()) :
                        while ($query->have_posts()) : $query->the_post();
                        // Featured Image
                        // if (has_post_thumbnail()) {
                        // $image_url = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
                        // } else {
                        // $image_url = THEMEURL . '/app/images/rectPlace.png'; // fallback
                        // }
                        $image_id  = get_field('service_thumbnail_image', get_the_ID());
                        $image_url = wp_get_attachment_image_url($image_id, 'full'); ?>
                        // Excerpt / custom field
                        $excerpt = get_the_excerpt();
                        ?>
                        <div class="box">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo esc_url($image_url); ?>" alt="<?php the_title_attribute(); ?>" class="img-full">
                            </a>
                            <div class="case-study-info">
                                <!-- Optional publish date -->
                                <!-- <div class="dates"><?php echo get_the_date('M j, Y'); ?></div> -->
                                <p class="case-title"><?php the_title(); ?></p>
                                <p class="abstract"><?php echo wp_trim_words($excerpt, 20, '...'); ?></p>
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    Read More <img src="<?php echo THEMEURL; ?>/app/images/blog-arrow.svg" alt="">
                                </a>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        else :
                        echo '<p>No case studies found.</p>';
                        endif;
                        ?>
                    </div>
                    <div class="text-center">
                        <a href="javascript:;" class="blankBtn caseLoadBtn">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult bg-blue" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle text-white">Make your Results Unforgettable</div>
                <div class="secTitle text-white">Tell us more about yourself, and we’ll do the rest</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>