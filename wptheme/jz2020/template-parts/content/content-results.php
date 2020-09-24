<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<div class="column">
	<div class="blog_card">
		<div class="card-img">
			<a href="<?php echo get_permalink($post->ID)?>">
				<picture>
					<source srcset="<?php echo get_the_post_thumbnail_url( null, 'large' ); ?>">
					<img class="crop" src="<?php echo get_the_post_thumbnail_url( null, 'large' ); ?>">
				</picture>
			</a>
		</div>
		<h3><?php the_title(); ?></h3>
		<hr class="yellow" />
		<p><?php the_excerpt(); ?></p>
		<div class="spacer"></div>
		<a class="no-hover no-visited no-focus" href="<?php echo get_permalink($post->ID)?>"><span class="blue-cta">READ MORE</span></a>
	</div>
</div>

