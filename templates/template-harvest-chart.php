<?php
/**
* Template Name: Harvest Chart
* Template Post Type: page
*
* @package WordPress
* @subpackage Twenty_Twenty_One
* @since Twenty Twenty-One 1.0
*/
get_header(); ?>
<section class="section inner--banner" style="background-image: url(<?php the_field('inner_banner'); ?>);">
    <div class="wrap">
        <h1 class="text-white">Harvest Chart</h1>
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
<section class="section section--harvesttable">
    <div class="wrap">
        <?php the_content(); ?>
    </div>

</section>

<?php
	get_footer();