<?php
get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="page">
			<div class="container-fluid">	
				<div class="crumbs">
					<p><a href="<?php echo home_url(); ?>">Home</a>  <b>>></b> </p><p class="activepage"><?php the_title(); ?></p>
					<hr class="clear blueline"/>
				</div>
				<div class="blog-featured">
					<?php
						//if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						//	the_post_thumbnail( 'full' );
						//}
					?>
				</div>
				<h1><?php the_title(); ?></h1>
			<?php

			// Start the Loop.
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'single' );

				

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End the loop.
			?>
			</div>
		</div>	
		</main><!-- #main -->
	</div><!-- #primary -->
<!-- This adds the transition graphic to lead into the contact section -->
<!--<div class="toptransition-grey">
</div>-->
<?php
get_footer();
