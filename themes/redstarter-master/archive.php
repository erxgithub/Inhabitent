<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
echo "archive.php".nl2br("\n");
echo get_post_type().nl2br("\n");

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
		<div class="flex">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

		<div class="flex flex-column flex-items-center" style="width: 25%; margin: 0 1% 0 1%;">
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
