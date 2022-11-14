<!DOCTYPE html>
<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo("name"); ?></title>

        <?php wp_head(); ?>
    </head>

    <body>
        <header class="header-border">
            <div class="header">
                <div class="container ">
                    <div class="row">

                        <div class="col logo-container">
                            <?php 
                            if (get_header_image() == '') { ?>
                            <h1><a href="<?php echo get_home_url(); ?>"><?php bloginfo("name"); ?></a></h1>
                            <?php
                            } else { ?>
                            <a href="<?php echo get_home_url(); ?>"><img class="logo" src="<?php header_image(); ?>"
                                    height="<?php echo get_custom_header()->height; ?>"
                                    width="<?php echo get_custom_header()->width; ?>" alt="Company Logo" /></a>
                            <?php
                            }
                        ?>

                        </div>
                        <div class="col navigation">
                            <nav class='custom-menu'>
                                <?php 
                                if (has_nav_menu("main-menu")) {
                                wp_nav_menu(array(
                                    'theme_location'=>'main-menu'
                                ));
                                } else {
                                    echo "Plase select a main menu.";
                                }
                            ?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>