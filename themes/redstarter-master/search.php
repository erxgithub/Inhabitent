<?php
/**
 * The template for displaying search results pages.
 *
 * @package RED_Starter_Theme
 */
//echo "search.php".nl2br("\n");
//echo get_post_type().nl2br("\n");

get_header(); ?>

<hr class="horizontal-line">

<div class="flex">

	<div id="primary" class="content-area search-section">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<div class="page-header">
				<h2 class="page-title"><?php printf( esc_html( 'SEARCH RESULTS FOR: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
			</div><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'search' ); ?>

				<div class="read-more-journal">
					<a href="<?php the_permalink(); ?>">
						<p>READ MORE&nbsp;&rarr;</p>
					</a>
				</div>

			<?php endwhile; ?>

			<?php red_starter_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
		<div id="sidebar2" class="flex flex-column sidebar-widget" role="complementary">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</div>
	<?php endif; ?>

</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
