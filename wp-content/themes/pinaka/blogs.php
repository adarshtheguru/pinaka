<?php
/*
Template Name: Blog Listing
*/
get_header(); ?>

<main id="site-content" role="main">
    <div class="container">
        <h1>Blog Posts</h1>

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
</main>

<?php get_footer(); ?>