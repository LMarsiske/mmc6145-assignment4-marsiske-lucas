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
                    </h2>
                    <?php
                    if (have_posts()) {
                        ?>
                    <ul class="archive-post-list">
                        <?php
                        while(have_posts()) {
                            the_post() ?>
                        <li>
                            <div class="archive-post-border">
                                <article class="archive-post">
                                    <h3>
                                        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
                                    </h3>
                                    <p class="excerpt">
                                        <?php 
                                    $excerpt = get_the_excerpt();

//                                     $excerpt = substr($excerpt, 0, 150);
// $result = substr($excerpt, 0, strrpos($excerpt, ' '));
echo $excerpt;
                                ?>
                                    </p>
                                </article>
                            </div>
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