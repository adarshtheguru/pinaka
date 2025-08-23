<?php get_header(); ?>

<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $welcomeText = get_post_meta(get_the_ID(), '_welcome_text', true);
        $post_date = get_the_date('F Y');
        $categories = get_the_category();
        $category_name = !empty($categories) ? $categories[0]->name : 'Uncategorized';
        $reading_time = ceil(str_word_count(strip_tags(get_the_content())) / 200); // Approx. 200 wpm
        ?>
<main class="single" id="single">
    <?php include 'customTemplates/heroSection.php' ?>
    <section class="padding singleOverview" id="singleOverview">
        <div class="container">
            <div class="secPrefix">
                <a href="<?php echo get_home_url(); ?>">Home</a> »
                <a href="<?php echo get_permalink(get_page_by_path('blogs')); ?>">Blog</a> »
                <a href="javascript:;">
                    <?php the_title(); ?>
                </a>
            </div>

            <h1 class="secTitle">
                <?php the_title(); ?>
            </h1>

            <div class="topInfo">
                <div class="date">
                    <?php echo $post_date; ?>
                </div>
                <div class="categoryName">
                    <?php echo esc_html($category_name); ?>
                </div>
                <div class="readingTime">
                    <?php echo $reading_time; ?> min reading
                </div>
            </div>

            <div class="contentPanel">
                <?php if (!empty($welcomeText)) : ?>
                <p>
                    <?php echo esc_html($welcomeText); ?>
                </p>
                <?php endif; ?>

                <?php if (has_post_thumbnail()) : ?>
                <img class="img-full publishImg" src="<?php the_post_thumbnail_url('full'); ?>" alt="">
                <?php endif; ?>

                <div class="bodyCont">
                    <?php the_content(); ?>
                </div>
                <div class="recentPost">
                    <h2>Recent Blogs</h2>
                    <div class="recentGridBox">
                        <?php
                        $recent_posts = new WP_Query([
                            'post_type'      => 'post',
                            'posts_per_page' => 3,
                            'post__not_in'   => [get_the_ID()],
                        ]);

                        if ($recent_posts->have_posts()) :
                            while ($recent_posts->have_posts()) : $recent_posts->the_post();
                                ?>
                                <div class="box">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="" class="img-full">
                                    <?php else : ?>
                                        <img src="<?php echo THEMEURL; ?>/app/images/placeholderBlank.png" alt="" class="img-full">
                                    <?php endif; ?>

                                    <div class="dates"><?php echo get_the_date('M j, Y'); ?></div>
                                    <p class="abstract">
                                        <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                                    </p>
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?php echo THEMEURL; ?>/app/images/roundLeft.svg" alt="">
                                    </a>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="padding wantResult" id="wantResult">
        <div class="container">
            <div class="text-center">
                <div class="secTitle">Want results that stand out?</div>
                <div class="secTitle">Tell us more about yourself, and we’ll do the rest</div>
            </div>
            <?php include 'customTemplates/mainForm.php'; ?>
        </div>
    </section>
</main>
<?php
    endwhile;
endif;
?>

<?php get_footer(); ?>