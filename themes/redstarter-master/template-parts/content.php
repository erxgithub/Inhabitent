<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
			<div style="margin: 0 1% 0 1%;">
				<?php
				if ( has_post_thumbnail() ) {
		    		the_post_thumbnail('square');
				}
				?>
			</div>
			<div class="read-entry" style="border-style: solid; border-width: 6px 1px 1px 1px; border-color: lightgrey; margin: 0 1% 0 1%; padding: 0 1rem 2rem 1rem;">
				<p style="font-size: 1.5rem; margin: 0; padding: 0 0 2rem 0;"><?php the_title(); echo '$'.get_field('price'); ?></p>
			</div>



<!-- 		<?php //if ( has_post_thumbnail() ) : ?>
			<?php //the_post_thumbnail( 'large' ); ?>
		<?php //endif; ?>

		<?php //the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php //if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php //red_starter_posted_on(); ?> / <?php //comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php //red_starter_posted_by(); ?>
		</div>
		<?php //endif; ?> -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php //the_excerpt(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
