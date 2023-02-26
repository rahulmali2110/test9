<?php
/**
* Template Name: Certificate
* Template Post Type: page
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0
*/
get_header(); ?>
<section class="section inner--banner" style="background-image: url(<?php the_field('inner_banner'); ?>);">
    <div class="wrap">
        <h1 class="text-white">Certificate</h1>
        <?php if( get_field('sub_heading') ): ?>
        <p><?php the_field('sub_heading'); ?></p>
        <?php endif; ?>
        <?php
        if ( function_exists('yoast_breadcrumb') ) {
          yoast_breadcrumb( '<div id="breadcrumbs"><div class="wrap">','</div></div>' );
            }
        ?>
    </div>
</section>
<section class="section section--benefits">
    <div class="wrap">
        <div class="row">
            <div class="col-7 col-md-12 mb-md-32">
                <?php if( get_field('main_heading') ){ ?>
                <h2><?php the_field('main_heading'); ?></h2>
                <?php } ?>
                <?php the_content(); ?>
            </div>
            <div class="col-5 col-md-12">
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/project-img.jpg" alt="">
            </div>
        </div>
    </div>
</section>
<?php if( have_rows('certification_images') ): ?>
<section class="section section--certificate">
    <div class="wrap">
        <div class="row">
            <div class="col-5 col-md-12 mb-md-32">
                <div class="content">
                    <h2 class="text-white">Our Certification:</h2>
                    <?php if( get_field('certification_info') ){ ?>
                    <h5 class="mb-32 text-white"><?php the_field('certification_info'); ?></h5>
                    <?php } ?>
                    <p>Our core values guide us in how we conduct ourselves—personally and professionally. In this ever-changing world of agriculture, our core values are constant. They underlie our work, how we interact with each other and which strategies we employ to fulfill our mission.</p>
                    <p>We continue to develop our capacities. Even more fruits and vegetables will be grown and gathered in the nearest future. The total number of our livestock is also increasing.</p>
                </div>
            </div>
            <div class="col-7 col-md-12">
               <div class="certificate__slider owl-carousel owl-them">
                    <?php  while( have_rows('certification_images') ): the_row();  ?>
                    <div class="item">
                        <?php if( get_sub_field('image') ){ ?>
                        <a data-fancybox="certification" href="<?php the_sub_field('image'); ?>" data-caption="<?php the_sub_field('alt') ?>">
                            <img rel="fancybox-button" src="<?php the_sub_field('image'); ?>" alt="<?php the_sub_field('alt') ?>">
                        </a>
                        <?php } ?>
                    </div>
                    <?php endwhile; ?>
                </div> 
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
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