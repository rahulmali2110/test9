<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

$description = get_the_archive_description();
?>
<div class="wrap">

	<div class="row">
		<header class="page-header col-8">
			<?php the_archive_title('<h1 class="page-title">', '</h1>'); ?>
			<?php if ($description) : ?>
				<div class="archive-description"><?php echo wp_kses_post(wpautop($description)); ?></div>
			<?php endif; ?>
		</header><!-- .page-header -->
		<div class="col-8">
			<?php if (have_posts()) : ?>
				<?php $i = 1;
				while (have_posts()) {
					the_post();
					if ($i == 1) {
						get_template_part('template-parts/content/content', 'first');
					} else {
						get_template_part('template-parts/content/content', get_theme_mod('display_excerpt_or_full_post', 'excerpt'));
					}
					$i++;
				} ?>

				<?php wp_pagenavi(); ?>

			<?php else : ?>
				<?php get_template_part('template-parts/content/content-none'); ?>
			<?php endif; ?>
		</div>
		<div class="col-1"></div>
		<div class="col-3">
			<div class="categories--list">
				<h6>DISCOVER MORE OF WHAT MATTERS TO YOU</h6>
				<?php
				$categories = get_categories();
				foreach ($categories as $category) {
					echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
				?>
			</div>
		</div>
	</div>
	<?php get_template_part('template-parts/post/popular-posts'); ?>
</div>
<?php get_footer(); ?>