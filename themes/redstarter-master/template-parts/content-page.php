<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */
//echo "content-page.php".nl2br("\n");
//echo get_post_type().nl2br("\n");

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
		if (get_field('title1')) {?>
			<h2><?php echo get_field('title1'); ?></h2>
		<?php
		} ?>

		<?php
		if (get_field('content1')) {?>
			<p><?php echo get_field('content1'); ?></p>
		<?php
		} ?>

		<?php
		if (get_field('title2')) {?>
			<h2><?php echo get_field('title2'); ?></h2>
		<?php
		} ?>

		<?php
		if (get_field('content2')) {?>
			<p><?php echo get_field('content2'); ?></p>
		<?php
		} ?>

		<?php
		if (get_field('title3')) {?>
			<h2><?php echo get_field('title3'); ?></h2>
		<?php
		} ?>

		<?php
		if (get_field('content3')) {?>
			<p><?php echo get_field('content3'); ?></p>
		<?php
		} ?>

		<?php
		if (get_field('contact_form')) {?>
			<p><?php echo get_field('contact_form'); ?></p>
		<?php
		} ?>

	</div><!-- .entry-content -->
</article><!-- #post-## -->
