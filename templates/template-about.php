<?php
/**
* Template Name: About Us
* Template Post Type: page
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0
*/
get_header(); ?>
<section class="section inner--banner" style="background-image: url(<?php the_field('inner_banner'); ?>);">
    <div class="wrap">
        <h1 class="text-white">About Us</h1>
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
<section class="section section--growth">
    <div class="wrap">
        <div class="row">
            <div class="col-6 col-sm-12 mb-sm-32">
                <h2>We are Cultivating Ideas for Growth.</h2>
                <p>We provide leading solutions to agricultural and agro-industrial production through world-class products and services, always committed to meeting the needs and expectations.</p>
                <p>People at Farmey are helping farmers to emerging markets maximize their profits. We use agronomic and agro-industrial production through world-class products</p>
                <ul class="growth_call">
                    <li><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/whatsapp.png" alt=""></li>
                    <li>
                        <span>Contact us for Service</span><br>
                        <a href="tel:+919974537938">+91 997 453 7938</a>
                    </li>
                </ul>
            </div>
            <div class="col-6 col-sm-12">
                <div class="growth_image">
                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/agritouch/farmey.jpg" alt="">
                    <p>35 Years Of Experience</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-dark">
    <div class="wrap">
        <div class="row row--space-center">
            <div class="col-10 col-sm-12">
                <div class="mb-48">
                    <div class="h2">
                    <?php if( get_field('vision_heading') ): ?>
                    <?php the_field('vision_heading'); ?>
                    <?php endif; ?>
                    </div>
                    <?php if( get_field('vision_info') ): ?>
                        <?php the_field('vision_info'); ?>
                    <?php endif; ?>
                </div>
                <div>
                    <div class="h2">
                    <?php if( get_field('mission_heading') ): ?>
                    <?php the_field('mission_heading'); ?>
                    <?php endif; ?>
                    </div>
                    <?php if( get_field('mission_info') ): ?>
                        <?php the_field('mission_info'); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $the_query = new WP_Query( 'page_id=151' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<section class="section section--solution">
    <div class="wrap">
        <div class="row row--space-between">
            <?php if( get_field('solution_information') ): ?>
            <div class="col-5 col-md-12 mb-md-32">
                <div class="bestsolution fadeInUp wow">
                    <?php if( get_field('solution_heading') ): ?>
                    <h2><?php the_field('solution_heading'); ?></h2>
                    <?php endif; ?>
                    <?php if( get_field('solution_information') ): ?>
                    <?php the_field('solution_information'); ?>
                    <?php endif; ?>
                    <a class="btn fadeInUp wow mt-32" data-wow-delay="800ms" href="<?php echo get_permalink(2); ?>">Know More</a>
                </div>
            </div>
            <?php endif; ?>
            <?php if( get_field('solution_image_2') ): ?>
            <div class="col-6 col-md-12">
                <div class="solution__block">
                    <div class="solution__image fadeInUp wow mb-24" data-wow-delay="400ms">
                        <?php if( get_field('solution_image_1') ): ?>
                        <img class="larg" src="<?php the_field('solution_image_1'); ?>">
                        <?php endif; ?>
                    </div>
                    <?php if( get_field('solution_image_2') ): ?>
                        <div class="solution__image solution__small  fadeInUp wow" data-wow-delay="600ms">
                            <img src="<?php the_field('solution_image_2'); ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?> 
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

<?php $the_query = new WP_Query( 'page_id=151' ); ?>
<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<?php if( have_rows('whywe_detail') ): ?>
<section class="section section--whywe">
    <div class="wrap">
        <div class="whywe__inner">
            <div class="section__heading text-center">
                <?php if( get_field('whywe_heading') ): ?>
                <h2 class="text-center mb-32 fadeInUp wow" data-wow-delay="200ms"><?php the_field('whywe_heading'); ?>
                </h2>
                <?php endif; ?>
            </div>
            <div class="row">
                <?php while( have_rows('whywe_detail') ): the_row(); ?>
                <div class="col-3 col-md-6 col-xs-12 mb-30">
                    <div class="whywe__block fadeInUp wow" data-wow-delay="400ms">
                        <?php if( get_sub_field('icon') ): ?>
                        <img src="<?php the_sub_field('icon'); ?>" alt="">
                        <?php endif; ?>
                        <div class="whywe__Detail">
                            <?php if( get_sub_field('heading') ): ?>
                            <h4><?php the_sub_field('heading'); ?></h4>
                            <?php endif; ?>
                            <?php if( get_sub_field('description') ): ?>
                            <p><?php the_sub_field('description'); ?></p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

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