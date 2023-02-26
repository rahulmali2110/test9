<?php

/**
 * Template Name: Contact Us
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */
get_header(); ?>
<section class="section inner--banner" style="background-image: url(<?php the_field('inner_banner'); ?>);">
    <div class="wrap">
        <h1>Contact Us</h1>
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

<section class="section section--contact--info">
    <div class="wrap">
        <div class="row row--items-center">
            <div class="col-4 col-lg-12 mb-lg-32">
                <h2>Get In Touch</h2>
                <?php the_content(); ?>
            </div>
            <div class="col-8 col-lg-12">
                <div class="getin__touch">
                    <div class="form__contact">
                        <?php echo do_shortcode('[contact-form-7 id="25" title="Get In Touch"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section--information pb-0 pt-0">
    <div class="wrap">
        <div class="information__detail">
            <div class="row">
                <div class="col-4 col-md-6 col-xs-12 mb-md-32">
                    <div class="contect__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-map-larg.svg">
                        <div class="info">
                            <h5>Our Office</h5>
                            <?php if( get_field('our_office', 'option') ){ ?>
                            <p class="mb-0"><?php the_field('our_office', 'option'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-xs-12 mb-md-32">
                    <div class="contect__info">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-phone-larg.svg">
                        <div class="info">
                            <h5>Call Us</h5>
                            <?php if( get_field('call_us', 'option') ){ ?>
                            <a
                                href="tel:<?php the_field('call_us', 'option'); ?>"><?php the_field('call_us_text', 'option'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-md-6 col-xs-12">
                    <div class="contect__info mb-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-email-larg.svg">
                        <div class="info">
                            <h5>Email Address</h5>
                            <?php if( get_field('email', 'option') ){ ?>
                            <a
                                href="mailto:<?php the_field('email', 'option'); ?>"><?php the_field('email', 'option'); ?></a>
                            <?php } ?>
                            <?php if( get_field('email_1', 'option') ){ ?>
                            <br><a
                                href="mailto:<?php the_field('email_1', 'option'); ?>"><?php the_field('email_1', 'option'); ?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section--contact--map">
    <?php if( get_field('contact_map') ){ ?>
    <?php the_field('contact_map'); ?>
    <?php } ?>
</section>

<?php
get_footer();