<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Navigation Bar -->
    <nav>
        <!-- KIWISPACE logo text -->
        <div class="kiwispace-logo">
            <a href="<?php echo home_url(); ?>">KIWISPACE</a>
        </div>

        <!-- Main Menu -->
        <ul class="nav-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'header-menu',
                'container' => false,
                'items_wrap' => '%3$s',
                'depth' => 1,
                'fallback_cb' => false
            ));
            ?>
        </ul>
    </nav>

    <?php wp_footer(); ?>
</body>
</html>
