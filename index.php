<?php get_header(); ?>
<main class="container">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

    <div class="ind-post">
        <div class="feat-img">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="text-container">
            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            <p class="excerpt"><?php echo get_the_excerpt() ?></p>
        </div>
    </div>

    <?php
            }
        }
    ?>
</main>
<?php get_footer(); ?>