<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
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
				<?php if ( is_home() && !$_GET["s"]) {
					echo "<h1>Recent Posts</h1><hr/>";
				}
			?>
			<?php
			if ( have_posts() ) {
				if ($_GET["s"]){
					echo "<h1>Search Results</h1><hr/>";
					echo "<p>Search results found for: <b>" . $_GET["s"] . "</b></p>";
				}
				// Load posts loop.
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content/content-results' );
				}

				// Previous/next page navigation.
				twentynineteen_the_posts_navigation();

			} else {

				// If no content, include the "No posts found" template.
				get_template_part( 'template-parts/content/content', 'none' );

			}
			?>
			</div>
		</div>
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<!-- This adds the transition graphic to lead into the contact section -->
<!--<div class="toptransition-grey">-->
</div>
<?php
get_footer();
