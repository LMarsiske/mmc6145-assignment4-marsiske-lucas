<?php get_header() ?>


<main class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <section class="archive-container">
                <h1 class="archive-title">
                    <?php 
                        if (is_category()) {
                            single_cat_title();
                        } elseif(is_tag()) {
                            single_tag_title();
                        } elseif(is_day()) {
                            echo "Daily Archives &mdash; ".get_the_date();
                        } elseif(is_month()) {
                            echo "Monthly Archives &mdash;  ".get_the_date("F Y");
                        } elseif(is_year()) {
                            echo "Yearly Archives &mdash; ".get_the_date("Y");
                        } else {
                            echo "Archives";
                        }
                    ?>
                </h1>
                <?php
                    if (have_posts()) {
                        ?>
                <ul class="archive-post-list">
                    <?php
                        while(have_posts()) {
                            the_post() ?>
                    <li class='mb-4'>
                        <article class="archive-post d-flex mb-2">
                            <?php the_post_thumbnail('thumbnail'); ?>
                            <div class="archive-post-text">
                                <h2>
                                    <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                </h2>
                                <p class="post_data">
                                    <?php echo "Post written by: ".get_the_author()." | Published on: ".get_the_date()?>
                                <p class="excerpt">
                                    <?php 
                                    $excerpt = get_the_excerpt();
echo $excerpt;
                                ?>
                                </p>
                            </div>
                        </article>
                    </li>

                    <?php
                        }
                    }
                ?>
                </ul>
            </section>
        </div>
    </div>
</main>
<?php get_footer() ?>