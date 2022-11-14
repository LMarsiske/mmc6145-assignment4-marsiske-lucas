<?php get_header(); ?>
<main class="container">
    <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>

    <div class="single-post row">
        <div class="feat-img col-md-3">
            <?php the_post_thumbnail('medium'); ?>

        </div>
        <div class='col-md-9'>
            <div class="meta">
                <h1><?php the_title(); ?></h1>
                <p class="post_data">
                    <?php echo "Post written by: ".get_the_author()." | Published on: ".get_the_date()?>
                </p>
            </div>
            <div class="text-container">

                <p class="content"><?php the_content() ?></p>
            </div>
        </div>
    </div>

    <?php
            }
        }
    ?>
</main>
<?php get_footer(); ?>