<?php get_header(); ?>

<main id="site-content" role="main">
    <div class="single-post container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article <?php post_class(); ?>>

                <h1 class="post-title"><?php the_title(); ?></h1>

                <div class="post-meta">
                    <span>Posted on <?php echo get_the_date(); ?> by <?php the_author(); ?></span>
                </div>

                <div class="post-content">
                    <?php the_content(); ?>
                </div>

                <div class="post-categories">
                    <strong>Categories:</strong> <?php the_category(', '); ?>
                </div>

                <div class="post-tags">
                    <strong>Tags:</strong> <?php the_tags('', ', '); ?>
                </div>

            </article>

            <div class="post-navigation">
                <?php previous_post_link(); ?> |
                <?php next_post_link(); ?>
            </div>

        <?php endwhile; endif; ?>

    </div>
</main>

<?php get_footer(); ?>