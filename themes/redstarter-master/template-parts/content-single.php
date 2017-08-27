<?php
/**
 * Template part for displaying single posts.
 *
 * @package RED_Starter_Theme
 */
//echo "content-single.php".nl2br("\n");
//echo get_post_type().nl2br("\n");

if (get_post_type() == "adventures") {
	//get_sidebar();
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header" style="color: black;">
		<?php
			if (get_post_type() == 'post' || get_post_type() == 'products') {
 				if ( has_post_thumbnail() ) {
					the_post_thumbnail( 'large' );
 				}
			}
		?>
 
		<!-- <?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?> -->
		<h1 style="font-size: 3rem;"><?php echo strtoupper(get_the_title()); ?></h1>

		<div class="entry-meta">
			<!-- <?php //red_starter_posted_on(); ?> / <?php //red_starter_comment_count(); ?> / <?php //red_starter_posted_by(); ?> -->
			<?php echo 'BY '.strtoupper(get_the_author()); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content" style="font-size: 1.5rem; color: black;">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

