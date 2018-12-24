<?php 
    /*Loading resources*/
    function load_resources() {
        wp_enqueue_script('bootstrapPopper', get_template_directory_uri().'/vendor/bootstrap/js/popper.js');
        wp_enqueue_style('bootstrap',  get_template_directory_uri().'/vendor/bootstrap/css/bootstrap.min.css');
        wp_enqueue_script('bootstrapJs', get_template_directory_uri().'/vendor/bootstrap/js/bootstrap.js');
        wp_enqueue_style('animate',  get_template_directory_uri().'/vendor/animate/animate.css');
        if($_SERVER['SERVER_NAME'] != 'localhost'){
            wp_enqueue_style('style', get_template_directory_uri() . '/style.min.css');
        } else{
        wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
        }
        wp_enqueue_script('jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
        wp_enqueue_script('slickJs', get_template_directory_uri().'/vendor/slick/slick.min.js');
        wp_enqueue_style('slick',  get_template_directory_uri().'/vendor/slick/slick.css');
        wp_enqueue_style('slick-theme',  get_template_directory_uri().'/vendor/slick/slick-theme.css');
        wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.2.0/css/all.css');
        wp_enqueue_script('cozajs', get_template_directory_uri() . '/js/coza.js');
    };
    add_action('wp_enqueue_scripts', 'load_resources');

    /*Functions.php basic functions*/
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    /*Navigation Menus*/
    register_nav_menus( array(
        'header' => __('Primary Menu'),
    ) );
    function widgets_init() {
        register_sidebar( array(
            'name'          => 'Footer Column 1',
            'id'            => 'footer_1',
            'before_title'  => '<h4 class="ttl">',
            'after_title'   => '</h4>',
        ) );
        register_sidebar( array(
            'name'          => 'Footer Column 2',
            'id'            => 'footer_2',
            'before_title'  => '<h4 class="ttl">',
            'after_title'   => '</h4>',
        ) );
        register_sidebar( array(
            'name'          => 'Footer Column 3',
            'id'            => 'footer_3',
            'before_title'  => '<h4 class="ttl">',
            'after_title'   => '</h4>',
        ) );
        register_sidebar( array(
            'name'          => 'Footer Column 4',
            'id'            => 'footer_4',
            'before_title'  => '<h4 class="ttl">',
            'after_title'   => '</h4>',
        ) );
        register_sidebar( array(
            'name'          => 'Footer Column 5',
            'id'            => 'footer_5',
            'before_title'  => '<h4 class="copyrights-title">',
            'after_title'   => '</h4>',
        ) );
    }
    add_action( 'widgets_init', 'widgets_init' );

    //Add Custom Carousel

    function coza_add_carousel_section($id, $wp_customize){
        $wp_customize->add_section('coza-carousel', array(
            'title' => 'Carousel'
        ));

        $wp_customize->add_setting('coza-carousel-title-'.$id, array(
            'default' => 'Title Text '.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-carousel-title-control-'.$id, array(
            'label' => 'Title '.$id,
            'section' => 'coza-carousel',
            'settings' => 'coza-carousel-title-'.$id
        )));

        $wp_customize->add_setting('coza-carousel-subtitle-'.$id, array(
            'default' => 'Subtitle Text '.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-carousel-subtitle-control-'.$id, array(
            'label' => 'Subtitle '.$id,
            'section' => 'coza-carousel',
            'settings' => 'coza-carousel-subtitle-'.$id,
        )));

        $wp_customize->add_setting('coza-carousel-btn-'.$id, array(
            'default' => 'Button '.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-carousel-btn-control-'.$id, array(
            'label' => 'Button Text '.$id,
            'section' => 'coza-carousel',
            'settings' => 'coza-carousel-btn-'.$id
        )));
        
        $wp_customize->add_setting('coza-carousel-link-'.$id);

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-carousel-link-control-'.$id, array(
            'label' => 'Link '.$id,
            'section' => 'coza-carousel',
            'settings' => 'coza-carousel-link-'.$id,
            'type' => 'dropdown-pages'
        )));

        $wp_customize->add_setting('coza-carousel-image-'.$id);

        $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'coza-carousel-image-control-'.$id, array(
            'label' => 'Image '.$id,
            'section' => 'coza-carousel',
            'settings' => 'coza-carousel-image-'.$id
        )));
    }

    function coza_carousel($wp_customize) {
        for($i=1;$i<=3;$i++)
            coza_add_carousel_section($i, $wp_customize);
    }

    add_action('customize_register', 'coza_carousel');

    /*Add Custom Banner*/
    function coza_add_banner_section($id, $wp_customize){
        $wp_customize->add_section('coza-banner', array(
            'title' => 'Banner'
        ));

        $wp_customize->add_setting('coza-banner-title-'.$id, array(
            'default' => 'Title Text'.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-banner-title-control-'.$id, array(
            'label' => 'Title'.$id,
            'section' => 'coza-banner',
            'settings' => 'coza-banner-title-'.$id
        )));

        $wp_customize->add_setting('coza-banner-subtitle-'.$id, array(
            'default' => 'Subtitle Text'.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-banner-subtitle-control-'.$id, array(
            'label' => 'Subtitle'.$id,
            'section' => 'coza-banner',
            'settings' => 'coza-banner-subtitle-'.$id,
        )));

        $wp_customize->add_setting('coza-banner-text-'.$id, array(
            'default' => 'Text'.$id
        ));

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-banner-text-control-'.$id, array(
            'label' => 'Text'.$id,
            'section' => 'coza-banner',
            'settings' => 'coza-banner-text-'.$id,
        )));

        $wp_customize->add_setting('coza-banner-image-'.$id);

        $wp_customize->add_control( new WP_Customize_Media_Control($wp_customize, 'coza-banner-image-control-'.$id, array(
            'label' => 'Image '.$id,
            'section' => 'coza-banner',
            'settings' => 'coza-banner-image-'.$id
        )));

        $wp_customize->add_setting('coza-banner-link-'.$id);

        $wp_customize->add_control( new WP_Customize_Control($wp_customize, 'coza-banner-link-control-'.$id, array(
            'label' => 'Link '.$id,
            'section' => 'coza-banner',
            'settings' => 'coza-banner-link-'.$id,
            'type' => 'dropdown-pages'
        )));
    }

    function coza_banner($wp_customize) {
        $wp_customize->add_setting('coza-banner-display', array(
            'default' => 'No'
        ));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'coza-banner-display-control', array(
            'label' => 'Display this section ?',
            'section' => 'coza-banner',
            'settings' => 'coza-banner-display',
            'type' => 'select',
            'choices' => array('No' => 'No', 'Yes' => 'Yes')
        )));

        for($i=1;$i<=3;$i++)
            coza_add_banner_section($i, $wp_customize);
    }

    add_action('customize_register', 'coza_banner');

?>