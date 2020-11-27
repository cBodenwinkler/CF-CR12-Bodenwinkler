<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Using User-given charset -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Displaying Tagline -->
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <!-- Title from User-given Site Title -->
    <title><?php bloginfo('name'); ?></title>

    <!-- STYLESHEETS -->
    <!-- <link rel="stylesheet" href="<?php //bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php //bloginfo('template_url'); ?>/css/bootstrap.css"> -->

    <?php wp_head() ?>
</head>

<body>
<!-- HEADER - NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <img id="logoID" class="mr-4" src="<?php echo get_bloginfo('template_url') ?>/assets/logo.png"/>
            <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'bs-example-navbar-collapse-1',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
        </div>
    </nav>