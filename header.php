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
    <body <?php body_class(); ?>>
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
                        <img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/logotext.png" alt="">
                    </a>
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                        <img src="/schreuder/wp-content/themes/miv_schreuderbouw/img/over.png" alt="">
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