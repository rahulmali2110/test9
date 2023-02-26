<?php

/**
 * Template Name: Infrastructure
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header(); ?>
<section class="section inner--banner" style="background-image: url(<?php the_field('inner_banner'); ?>);">
    <div class="wrap">
        <h1 class="text-white">Infrastructure</h1>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<div id="breadcrumbs"><div class="wrap">','</div></div>' );
            }
        ?>
    </div>
</section>
<section class="section section--bestfood">
    <div class="wrap">
        <div class="section__heading text-center">
            <h2 class="text-center">We Grow Best Food</h2>
            <?php the_content(); ?>
        </div>
        <div class="row row--items-center">
            <div class="col-4 col-sm-12 mb-sm-32">
                <ul class="text-right">
                    <li>
                        <h4>Fresh</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                    <li>
                        <h4>Healthy</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                    <li>
                        <h4>Eco</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                </ul>
            </div>
            <div class="col-4 col-sm-12 mb-sm-32">
                <div class="bestfood__image">
                   <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/best-food.png" alt=""> 
                </div>
            </div>
            <div class="col-4 col-sm-12">
                <ul class="text-left">
                    <li>
                        <h4>Tasty</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                    <li>
                        <h4>Yammy</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                    <li>
                        <h4>Premium</h4>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="section pt-0">
    <div class="wrap">
        <h3 class="text-center mb-48">We have expertise in these areas</h3>
        <div class="row">
           <div class="col-6 col-md-12 mb-md-32">
                <div class="expertise__areas">
                    <h4 class="text-green">Square Roots</h4>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/infrastructure/news01.jpg" alt="">
                    <p>Square Roots is an urban farming accelerator that was started with 10 of Freight Farms</p>
                </div>
           </div>
            <div class="col-6 col-md-12">
                <div class="expertise__areas">
                    <h4 class="text-green">Sky Vegetables</h4>
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/infrastructure/news03.jpg" alt="">
                    <p>Dynamic Dunescapes is an exciting and ambitious project, rejuvenating some of England & Wales.</p>
                </div>
            </div>
            <div class="col-12  mt-64">
                <div class="expertise__areas">
                    <h4 class="text-green">Farm One</h4>
                    <iframe style="width: 100%;" width="100" height="450" src="https://www.youtube.com/embed/_2mJ8jH2NFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p>Our high-tech vertical farms grow fresh microgreens, herbs & flowers Order online for local delivery.</p>
                </div>
            </div> 
        </div>
    </div>
</section>
<section class="section bg-dark">
    <div class="wrap">
        <?php if( have_rows('packing_gallery') ): ?>
        <div class="infrastructure__slider owl-carousel owl-them">
            <?php while( have_rows('packing_gallery') ): the_row(); ?>
            <div class="item">
                <a data-fancybox="packing" href="<?php echo wp_get_attachment_url(get_sub_field('photo')); ?>"
                    data-caption="<?php the_sub_field('title') ?>">
                    <?php echo wp_get_attachment_image( get_sub_field('photo'), 'large' ); ?>
                </a>
            </div>
            <?php endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php $the_query = new WP_Query( 'page_id=151' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<?php if( have_rows('logo_image') ): ?>
<section class="section section--logos">
    <div class="wrap">
        <a href="https://www.kvagroproducts.com/certificate/">
            <div class="logos__images">
                <?php while( have_rows('logo_image') ): the_row(); ?>
                <div class="logos__box fadeInUp wow" data-wow-delay="600ms">
                    <img src="<?php the_sub_field('logo_image'); ?>" alt="<?php the_sub_field('alt'); ?>">
                </div>
                <?php endwhile; ?>
            </div>
        </a>
    </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php
get_footer();