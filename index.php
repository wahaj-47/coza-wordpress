<?php 
    get_header();
?>

<!-- Carousel Section -->
<div class="carousel">
    <div class="slider" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('coza-carousel-image-1')); ?>)">
        <div class="text-wrapper">
            <div class="carousel-text">
                <div class="carousel-title animated fadeInDown">
                    <?php echo get_theme_mod('coza-carousel-title-1');?>
                </div>
                <div class="carousel-subtitle animated fadeInUp">
                    <?php echo get_theme_mod('coza-carousel-subtitle-1');?>
                </div>
                <div class="carousel-btn animated jackInTheBox">
                    <a href="<?php echo get_permalink(get_theme_mod('caza-carousel-link-1'));?>"><span class="btn"><?php echo get_theme_mod('coza-carousel-btn-1');?></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('coza-carousel-image-2')); ?>)">
        <div class="text-wrapper">
            <div class="carousel-text">
                <div class="carousel-title">
                    <?php echo get_theme_mod('coza-carousel-title-2');?>
                </div>
                <div class="carousel-subtitle">
                    <?php echo get_theme_mod('coza-carousel-subtitle-2');?>
                </div>
                <div class="carousel-btn">
                    <a href="<?php echo get_permalink(get_theme_mod('caza-carousel-link-2'));?>"><span class="btn"><?php echo get_theme_mod('coza-carousel-btn-2');?></span></a>
                </div>
            </div>
        </div>
    </div>
    <div class="slider" style="background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('coza-carousel-image-3')); ?>)">
        <div class="text-wrapper">
            <div class="carousel-text">
                <div class="carousel-title">
                    <?php echo get_theme_mod('coza-carousel-title-3');?>
                </div>
                <div class="carousel-subtitle">
                    <?php echo get_theme_mod('coza-carousel-subtitle-3');?>
                </div>
                <div class="carousel-btn">
                    <a href="<?php echo get_permalink(get_theme_mod('caza-carousel-link-3'));?>"><span class="btn"><?php echo get_theme_mod('coza-carousel-btn-3');?></span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Carousel Section -->

<!-- Banner Section -->
<?php if (get_theme_mod('coza-banner-display') == 'Yes') {?>
<div class="banner container">
    <div class="banner-wrapper">
        <a href="<?php echo get_permalink(get_theme_mod('caza-banner-link-1'));?>">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('coza-banner-image-1')); ?>" alt="">
            <div class="banner-container">
                <div class="banner-title">
                    <?php echo get_theme_mod('coza-banner-title-1'); ?>
                </div>
                <div class="banner-subtitle">
                    <?php echo get_theme_mod('coza-banner-subtitle-1'); ?>
                </div>
                <div class="banner-text-wrapper">
                    <div class="banner-text">
                        <?php echo get_theme_mod('coza-banner-text-1'); ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="banner-wrapper">
        <a href="<?php echo get_permalink(get_theme_mod('caza-banner-link-2'));?>">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('coza-banner-image-2')); ?>" alt="">
            <div class="banner-container">
                <div class="banner-title">
                    <?php echo get_theme_mod('coza-banner-title-2'); ?>
                </div>
                <div class="banner-subtitle">
                    <?php echo get_theme_mod('coza-banner-subtitle-2'); ?>
                </div>
                <div class="banner-text-wrapper">
                    <div class="banner-text">
                        <?php echo get_theme_mod('coza-banner-text-2'); ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="banner-wrapper">
        <a href="<?php echo get_permalink(get_theme_mod('caza-banner-link-3'));?>">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('coza-banner-image-3')); ?>" alt="">
            <div class="banner-container">
                <div class="banner-title">
                    <?php echo get_theme_mod('coza-banner-title-3'); ?>
                </div>
                <div class="banner-subtitle">
                    <?php echo get_theme_mod('coza-banner-subtitle-3'); ?>
                </div>
                <div class="banner-text-wrapper">
                    <div class="banner-text">
                        <?php echo get_theme_mod('coza-banner-text-3'); ?>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
<?php  }?>
<!-- Banner Section -->

<!-- Product Section -->
<div class="container product-section">
    <div class="section-title"><h1>Product Overview</h1></div>
    <?php
        $params = array('posts_per_page' => 5, 'post_type' => 'product');
        $wc_query = new WP_Query($params);
    ?>

    <div class="categories filter-button-group">
        <button class="active-filter">All</button>
        <?php $product_cat = get_terms('product_cat');
            foreach($product_cat as $key => $category){ 
            ?>
            <button data-filter=".<?php echo strtolower($category->name); ?>">
                <?php echo $category->name; ?>
            </button>
            <?php } ?>
    </div>

    <div class="row isotope-grid">
    <?php if ($wc_query->have_posts()) : ?>
        <?php while ($wc_query->have_posts()) :
                        $wc_query->the_post(); ?>
            <div class="product-container isotope-item  <?php $terms = get_the_terms($post->ID, 'product_cat'); foreach ($terms as $category){ echo strtolower($category->name); } ?> col-sm-6 col-md-4 col-lg-3">
                <div class="product-img-container">
                    <div><?php the_post_thumbnail(); ?></div>
                    <a href="" class="quick-view-btn">Quick View</a>
                </div>
                <div class="product-text-container">
                    <div class="product-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="product-price">
                        PKR 1500
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php else:  ?>
        <li>
            <?php _e( 'No Products' ); ?>
        </li>
    <?php endif; ?>
    </div>
</div>
<!-- Product Section -->
<?php
    get_footer();
?>