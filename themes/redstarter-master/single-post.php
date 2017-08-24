<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
echo "single-post.php".nl2br("\n");
echo get_post_type().nl2br("\n");

get_header(); ?>

	<div class="flex">
		<div id="primary" class="content-area" style="width: 70%; margin: 0 5% 0 5%;">
			<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'single' ); ?>

				<?php the_post_navigation(); ?>

				<?php
					if (get_post_type() == "post") {
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					}
				?>

			<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<div class="flex flex-column" style="width: 30%;">
			<ul style="list-style-type: none; font-size: 1.5rem; line-height: 3rem;">
				<li>CONTACT INFO</li>
				<li style="color: rgb(45, 134, 112);"><i class="fa fa-phone" aria-hidden="true"></i>778-456-7891</li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@inhabitent.com" style="padding-left: 1rem;">info@inhabitent.com</a></li>
			</ul>
			<ul style="list-style-type: none; font-size: 1.5rem; line-height: 3rem;">
				<li>BUSINESS HOURS</li>
				<li><b>Monday-Friday:</b> 9am to 5pm</li>
				<li><b>Saturday:</b> 10am to 2pm</li>
				<li><b>Sunday:</b> Closed</li>
			</ul>
		</div>

	</div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
