    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">&copy; 2022</div>
                <div class="col-md-4"></div>
                <div class="col-md-4 socials">
                    <?php 
                        if (has_nav_menu("socials")) {
                            wp_nav_menu(array(
                                'theme_location'=>'socials'
                            ));
                        } else {
                            echo "Please select a social media menu.";
                        }
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>