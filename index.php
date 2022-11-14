<?php get_header(); ?>
<main class="container">
    <?php
        if (have_posts()) {
            $num_posts = wp_count_posts();
            $count = 0;
            while (have_posts()) {
                the_post(); 
                if ($count == 0) {
                    echo "<div class='row mb-4 d-flex align-items-stretch'>";
                }
                ?>

    <!-- <div class="ind-post-border "> -->
    <a href="<?php the_permalink() ?>" class="col-md-4 text-decoration-none">
        <div class="ind-post">
            <div class="feat-img">
                <?php
                    if (get_post_thumbnail_id()) {
                        $src = wp_get_attachment_url( get_post_thumbnail_id() );
                        echo '<img title="post=thumbnail" alt="thumbnail image" class="wp-post-image"
                    src="'.$src.'"
                style="width:100%; height:auto;">';
                }
                ?>

            </div>
            <div class="text-container">
                <h2><?php the_title(); ?></h2>
                <p class="post_data"><?php echo get_the_author()." | ".get_the_date()?>
                <p class="excerpt"><?php echo get_the_excerpt() ?></p>
            </div>
        </div>
    </a>
    <!-- </div> -->

    <?php
    $count++;
    if ($count == 3) {
        echo "</div>";
        $count = 0;
    }
            }
        }
    ?>
</main>
<?php get_footer(); ?>