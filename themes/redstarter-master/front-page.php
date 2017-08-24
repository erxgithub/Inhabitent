<?php get_header(); ?>
<div style="text-align: center; padding: 5rem 0 5rem 0;">
	<h1>SHOP STUFF</h1>
</div>
<div class="flex" style="padding: 0 5rem 0 5rem;">
<?php

$terms = get_terms([
    'taxonomy' => 'activity',
    'hide_empty' => false,
]);

$count = count($terms);

if ( $count > 0 ) {
	foreach ( $terms as $term ) {
		?>
		<div class="terms" style="width: 25%; border-style: solid; border-width: 6px 1px 1px 1px; border-color: lightgrey; margin: 0 1% 0 1%;">
		<?php
		//echo $term->slug.nl2br("\n");
		//echo $term->term_id.nl2br("\n");
		//echo get_term_link($term).nl2br("\n");
		//echo get_bloginfo('template_url').'/assets/images/'.$term->slug.'.svg'.nl2br("\n");
		?>
			<a href="<?php echo get_term_link($term); ?>">
				<div class="flex flex-column flex-items-center">
					<div style="width: 5.5rem; padding: 1rem 0 1rem 0;">
						<img src="<?php echo get_bloginfo('template_url').'/assets/images/'.$term->slug.'.svg'; ?>" />
					</div>
					<div style="width: 80%;">
						<p><?php echo $term->description; ?></p>
					</div>
				</div>
				<div style="background-color: rgb(45, 134, 112); color: white; text-align: center; margin: 0 30% 0 30%;">
					<p style="font-size: 1rem; padding: 1rem 0 1rem 0; color: white;"><?php echo $term->name.' STUFF'; ?></p>
				</div>
			</a>
		</div>
<?php
	}
}

?>
</div>

<div style="text-align: center; padding: 5rem 0 5rem 0;">
	<h1>INHABITENT JOURNAL</h1>
</div>
<div class="flex" style="padding: 0 5rem 0 5rem;">

<?php
$loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => '3', ) );

//global $wpdb;
//    echo "<pre>";
//    print_r($wpdb);
//    echo "</pre>";

while ( $loop->have_posts() ) : $loop->the_post();

	// the_title();
	// the_content();
	// the_author();
	// the_date();
	// the_category();

	// if ( has_post_thumbnail() ) {
 //    	the_post_thumbnail();
	// }
		?>
		<div class="flex flex-column flex-items-center" style="width: 33.3%; margin: 0 1% 0 1%;">
			<div>
				<?php
				if ( has_post_thumbnail() ) {
		    		the_post_thumbnail();
				}
				?>
			</div>
			<div class="read-entry" style="border-style: solid; border-width: 6px 1px 1px 1px; border-color: lightgrey; margin: 0 1% 0 1%; width: 100%; position: relative; top: -0.5rem; padding: 0 1rem 2rem 1rem;">
				<p style="font-size: 1rem; margin: 0; padding: 1.5rem 0 0 0;"><?php the_date(); echo ' / '.get_comments_number().' Comments'; ?></p>
				<p style="font-size: 1.75rem; color: rgb(45, 134, 112); margin: 0; padding: 0 0 2rem 0;"><b><?php the_title(); ?></b></p>
				<a href="<?php the_permalink(); ?>" style="border-style: solid; border-width: 1px; border-color: black; padding: 1rem 2.25rem 1rem 2.25rem; color: black;">READ ENTRY</a>
			</div>
		</div>
<?php

endwhile;
?>
</div>

<div style="text-align: center; padding: 5rem 0 5rem 0;">
	<h1>LATEST ADVENTURES</h1>
</div>

<?php

$adventures = array();

$loop = new WP_Query( array( 'post_type' => 'adventures', 'posts_per_page' => '4', ) );

while ( $loop->have_posts() ) : $loop->the_post();
	$image = get_field("banner");
	// if ( has_post_thumbnail() ) {
	// 	$image = get_the_post_thumbnail_url();
	// } else {
	// 	$image = "";
	// }
	$title = get_the_title();
	$link = get_the_permalink();
	
	$adventures[] = array("image" => $image, "title" => $title, "link" => $link);
endwhile;
?>

<div class="flex" style="padding: 0 4rem 0 4rem;">

	<div class="flex flex-column flex-items-center" style="width: 50%; margin: 0 1% 0 1%;">
		<div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo $adventures[0]['image']; ?>) no-repeat center bottom; background-size: cover; height: 45rem; width: 100%; padding: 0 1rem 0 1rem;">
			<div class="read-more" style="color: white;">
				<p style="font-size: 3.5rem;"><?php echo $adventures[0]['title']; ?></p>
				<a href="<?php echo $adventures[0]['link']; ?>" style="border-style: solid; border-width: 1px; border-color: white; padding: 1rem 2.25rem 1rem 2.25rem; font-size: 1.25rem;">READ MORE</a>
			</div>
		</div>
	</div>

	<div class="flex flex-column" style="width: 50%; margin: 0 1% 0 1%;">
		<div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo $adventures[1]['image']; ?>) no-repeat center bottom; background-size: cover; height: 50%; width: 100%; padding: 0 1rem 0 1rem;">
			<div class="read-more" style="color: white;">
				<p style="font-size: 3rem;"><?php echo $adventures[1]['title']; ?></p>
				<a href="<?php echo $adventures[1]['link']; ?>" style="border-style: solid; border-width: 1px; border-color: white; padding: 1rem 2.25rem 1rem 2.25rem; font-size: 1.25rem;">READ MORE</a>
			</div>
		</div>
		<div class="flex" style="height: 50%; margin: 2% 0 0 0;">
			<div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo $adventures[2]['image']; ?>) no-repeat center bottom; background-size: cover; width: 50%; margin: 2% 2% 0 0; padding: 0 1rem 0 1rem;">
				<div class="read-more" style="color: white;">
					<p style="font-size: 2rem;"><?php echo $adventures[2]['title']; ?></p>
					<a href="<?php echo $adventures[2]['link']; ?>" style="border-style: solid; border-width: 1px; border-color: white; padding: 1rem 2.25rem 1rem 2.25rem; font-size: 1.25rem;">READ MORE</a>
				</div>
			</div>
			<div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php echo $adventures[3]['image']; ?>) no-repeat center bottom; background-size: cover; width: 50%; margin: 2% 0 0 2%; padding: 0 1rem 0 1rem;">
				<div class="read-more" style="color: white;">
					<p style="font-size: 2rem;"><?php echo $adventures[3]['title']; ?></p>
					<a href="<?php echo $adventures[3]['link']; ?>" style="border-style: solid; border-width: 1px; border-color: white; padding: 1rem 2.25rem 1rem 2.25rem; font-size: 1.25rem;">READ MORE</a>
				</div>
			</div>
		</div>
	</div>

</div>

<div style="padding-bottom: 3rem;">
	<a href="" style="text-decoration: none;">
		<div class="more-adventures" style="background-color: rgb(45, 134, 112); text-align: center; margin: 2rem 0 2rem 5rem; width: 20%; padding: 1rem 0 1rem 0;">
			<a href="" style="font-size: 1.5rem;">MORE ADVENTURES</a>
		</div>
	</a>
</div>

<!-- <?php

//$count = count($adventures);

//for ($x = 0; $x < $count; $x++)
{
	?>
	<div class="flex flex-column flex-items-center" style="width: 50%; margin: 1% 1% 0 1%;">
		<div style="background: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5) ), url(<?php //echo $adventures[$x]['image']; ?>) no-repeat center top; background-size: cover; height: 50vh;">
			<div style="color: white;">
				<h3><?php //echo $adventures[$x]['title']; ?></h3>
			</div>
		</div>
	</div>
<?php
}
?>
 -->

<?php get_footer(); ?>
