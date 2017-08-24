<?php
/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */
echo "content.php".nl2br("\n");
echo get_post_type().nl2br("\n");

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
				<p><span><?php echo str_pad(get_the_title(), 20, '.'); ?></span><span><?php echo '$'.number_format(get_field('price'), 2, '.', ','); ?></span></p>
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
