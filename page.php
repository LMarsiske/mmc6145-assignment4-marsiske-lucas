<?php get_header(); ?>
<main class="container">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

    <div class="single-page">
        <div class="feat-img">
            <?php the_post_thumbnail('medium'); ?>
        </div>
        <div class="text-container">
            <h1><?php the_title(); ?></h1>
            <p class="content"><?php the_content() ?></p>
        </div>
    </div>

    <?php
            }
        }
    ?>
</main>
<?php get_footer(); ?>