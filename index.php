<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        <?php wp_title( ''); ?>
        </title>
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="miv_row miv_toprow row"><div class=" miv_column col-md-12 blue"></div></div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <?php bloginfo('name'); ?>
                    </a>
                </div>
                <?php
                wp_nav_menu( array(
                'menu'              => 'main_menu',
                'theme_location'    => 'main_menu',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
                );
                ?>
            </div>
        </nav>
        <div class="container">
            <div class="miv_row row">
                <div class="miv_column miv_blank col-md-12"></div>
            </div>
        </div>
        <div class="container-fluid">
            <span class="miv_iconbar">
        <div class="container">
            <div class="miv_row row">
                <div class=" miv_column col-md-3"></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/over.png" alt="">
                    <div><a class="miv_btn" href="#">Over Schreuderbouw</a></div></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/beving.png" alt="">
                    <div><a class="miv_btn" href="#">Aardbevingsschade</a></div></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/zakelijk.png" alt="">
                    <div><a class="miv_btn" href="#">Zakelijk</a></div></div>
                <div class=" miv_column col-md-3"></div>
            </div>
            <div class="miv_row row">
                <div class=" miv_column miv_spacer2 col-md-12"></div>
            </div>
            <div class="miv_row row">
                <div class=" miv_column col-md-3"></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/particulier.png" alt="">
                    <div><a class="miv_btn" href="#">Particulier</a></div></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/projecten.png" alt="">
                    <div><a class="miv_btn" href="#">Projecten</a></div></div>
                <div class=" miv_column miv_hi col-md-2"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/contact.png" alt="">
                <div><a class="miv_btn" href="#">Contact</a></div></div>
                <div class=" miv_column col-md-3"></div>
            </div>
                    </div>
            </span>
    </div>
    <div class="container">
            <div class="miv_row row">
                <div class=" miv_column miv_spacer col-md-12"></div>
            </div>
                            </div>
            <?php wp_footer(); ?>
                <div class="miv_footer miv_row row">
                    <div class=" miv_column col-md-3">
                        <div class="miv_footerzebra"><img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/zebra400.png" alt=""></div>
                    </div>
                    <div class=" miv_column col-md-6">
                        <div class="miv_footericonen"></div>
                    </div>
                    <div class=" miv_column miv_corner col-md-2">
                        <div class="miv_footertext">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, quidem recusandae neque.
                            </div>
                    </div>
                    <div class="miv_column_spec col-md-1"></div>
                </div>
                    <div class="miv_row row">
                        <div class=" miv_column miv_spacer col-md-12"></div>
                    </div>

            </body>