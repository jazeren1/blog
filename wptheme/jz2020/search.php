<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="page">
				<div class="container-fluid">
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title">
					<?php _e( 'Search results for: ', 'twentynineteen' ); ?>
					<span class="page-description"><?php echo get_search_query(); ?></span>
				</h1>
			</header><!-- .page-header -->

			<?php
			// Start the Loop.
			$count = 0;
			$close = false;

			while ( have_posts() ) :
				the_post();
				
				//mod 3 to create 3 tiles per row
				if(($count%3) == 0) {
					echo "<div class='row'>";
				}
				
				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that
				 * will be used instead.
				 */
				get_template_part( 'template-parts/content/content-results', 'excerpt' );
				$count++;

				if($count%3 == 0) {
					echo "</div>";
				}

				// End the loop.
			endwhile;

			// Previous/next page navigation.
			twentynineteen_the_posts_navigation();

			// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<!-- This adds the transition graphic to lead into the contact section -->
<div class="toptransition-grey">
</div>
<?php
get_footer();
