<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class()?>>
        <header class="site-header">
            <nav class="site-nav navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarLinks" aria-controls="navbarLinks" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php wp_nav_menu( array (
                    'theme_location' => 'header',
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarLinks',
                    'menu_class' => 'navbar-nav mr-auto'
                )) ?>
            </nav>
        </header>
    
    