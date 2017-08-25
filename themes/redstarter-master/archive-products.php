<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
//echo "archive-products.php".nl2br("\n");
//echo get_post_type().nl2br("\n");

get_header(); ?>
<hr>
<div style="font-size: 3rem; text-align: center; padding: 0.25rem 0 0.5rem 0;">
	<p><b>SHOP STUFF</b></p>
</div>

<div class="flex flex-justify-center" style="padding: 0 5rem 0 5rem;">

<?php

$terms = get_terms([
    'taxonomy' => 'activity',
    'hide_empty' => false,
]);

$count = count($terms);

if ( $count > 0 ) {
	foreach ( $terms as $term ) {
		?>
		<div class="terms" style="text-align: center; padding: 0 2.5rem 0 2.5rem;">
		<?php
		//echo $term->slug.nl2br("\n");
		//echo $term->term_id.nl2br("\n");
		//echo get_term_link($term).nl2br("\n");
		//echo get_bloginfo('template_url').'/assets/images/'.$term->slug.'.svg'.nl2br("\n");
		?>
			<a href="<?php echo get_term_link($term); ?>" style="font-size: 1.5rem; color: rgb(45, 134, 112);">
				<?php echo $term->name; ?>
			</a>
		</div>
<?php
	}
}

?>
</div>

	<div style="border-bottom-style: dashed; border-bottom-width: 1px; border-color: lightgrey; margin: 4rem 6rem 4rem 6rem;">
	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header" style="text-align: center;">
				<?php
					//the_archive_title( '<h1 class="page-title">', '</h1>' );
					//the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		<div class="flex flex-wrap" style="width: 100%; padding: 0 5rem 5rem 5rem;">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<div class="flex flex-column flex-items-center" style="width: 23%; margin: 0 1% 0 1%;">
				<?php
					get_template_part( 'template-parts/content' );
				?>
		</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>
		</div>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
