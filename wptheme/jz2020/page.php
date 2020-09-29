<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
<?php if ( !is_front_page() ) { ?>
	<div class="page">
		<div class="container-fluid">	
			<?php

				// Start the Loop.
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content/content', 'page' );

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) {
						comments_template();
					}

				endwhile; // End the loop.
				?>
		</div>
	</div>	

<?php } else { ?>
	<!-- About Me -->
	<div class="about">
		<div class="container-fluid">	
			<div class="col-sm-6 about-image">
					<img src="/wp-content/themes/jz2020/img/face.png" />
			</div>
			<div class="col-sm-6 about-text">
				<h2>About Me</h2>
				<h3>JOHN ZEREN</h3>
				<hr/>
				<p>From signle to family man, from individual contributor to technical people leader, from corporate office to entreprenuer and business man. This website is a conduit of my experiences to the world. I started documented my technical challenges and experiences nearly 15 years ago. From there I expand on hobbies, life events, and cool things I found along the way.</p>  

				<p>My new found focuses are centered around being a people leader and the learnings and experiences that come with it. True work life balance exists when you bring the best of your home to work and the best of your work home with you. We don't have to be defined by our jobs but we should love what we do.</p>
				<a class="no-hover no-visited no-focus" href="/about/"><span class="blue-cta">READ MORE</span></a>
				<div class="spacer"></div>
			</div>
		</div>
	</div>
	<!-- End About Me -->

	<!-- Highlighted Sections -->
	<div class="highlights">
		<div class="bottomtransition">
		</div>
		<div class="spacer"></div>
		<div class="container-fluid text-center">
			<div class="row">
				<div class="column">
					<div class="blue-col">
						<img src="/wp-content/themes/jz2020/img/resume.png" />
						<h4>RESUME</h4>
						<p>Over 10 years experience. Java, C#, C++ just to name a few, as well as a plethora of web technologies like HTML, CSS, Javascript. Web content management systems include Adobe CQ5 / AEM and Wordpress</p>
						<div class="spacer"></div>
						<a class="no-hover no-visited no-focus" href="#"><span class="orange-border-cta">READ MORE</span></a>
					</div>
				</div>

				<div class="column">
					<div class="blue-col">
						<img src="/wp-content/themes/jz2020/img/webwork.png" />
						<h4>WEBWORK</h4>
						<p>My web work is a mini-portfoloi of some of the websites I have either designed, coded, or both. This work is outside of my day to day 9 to 5 work and is mostly just for fun...</p>
						<div class="spacer"></div>
						<a class="no-hover no-visited no-focus" href="#"><span class="orange-border-cta">READ MORE</span></a>
					</div>
				</div>
				<div class="column">
					<div class="blue-col">
						<img src="/wp-content/themes/jz2020/img/blog.png" />
						<h4>BLOG</h4>
						<p>Read about what makes me tick. Topics range from tech to food to music, entertainment and back. Anything is fair game here. Feel free to comment on the post to keep topics alive</p>
						<div class="spacer"></div>
						<a class="no-hover no-visited no-focus" href="#"><span class="orange-border-cta">READ MORE</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="toptransition-gallery">
		</div>
	</div>
	<!-- End Highlighted Sections -->
	
	<!-- Gallery -->

	<div class="gallery">
		<div class="container-fluid text-center">
			<h2>Our Gallery</h2>
			<div class="spacer"></div>	
			<div class="row">
				<div class="column">
					<img class="gimage" src="/wp-content/themes/jz2020//img/gallery1.png"/>
				</div>
				<div class="column">
					<img class="gimage-alt" src="/wp-content/themes/jz2020//img/gallery2.png"/>
				</div>
				<div class="column">
					<img class="gimage" src="/wp-content/themes/jz2020//img/gallery3.png"/>
				</div>
			</div>
			<div class="row">
				<div class="column">
					<img class="gimage" src="/wp-content/themes/jz2020//img/gallery4.png"/>
				</div>
				<div class="column">
					<img class="gimage-alt" src="/wp-content/themes/jz2020//img/gallery5.png"/>
				</div>
				<div class="column">
					<img class="gimage" src="/wp-content/themes/jz2020//img/gallery6.png"/>
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->

	<!-- Blogs -->
	<div class="blogs">
		<div class="bottomtransition-gallery">
		</div>
		<div class="container-fluid text-center">
			<h2>Recent Blogs</h2>
			<div class="row">

				<?php 
				   // the query
				   $the_query = new WP_Query( array(
				      'posts_per_page' => 3,
				   )); 
				?>

				<?php if ( $the_query->have_posts() ) : ?>
				  <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="column">
							<div class="blog_card">
								<div class="card-img">
									<picture>
										<source srcset="<?php echo get_the_post_thumbnail_url( null, 'large' ); ?>">
										<img class="crop" src="<?php echo get_the_post_thumbnail_url( null, 'large' ); ?>">
									</picture>
								</div>
								<h3><?php the_title(); ?></h3>
								<hr class="yellow" />
								<p><?php the_excerpt(); ?></p>
								<div class="spacer"></div>
								<a class="no-hover no-visited no-focus" href="<?php echo get_permalink($post->ID)?>"><span class="blue-cta">READ MORE</span></a>
							</div>
						</div>
				  <?php endwhile; ?>
				  <?php wp_reset_postdata(); ?>
				<?php else : ?>
				  <p><?php __('No Blogs at this time'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<!-- End BLogs -->

	<!-- Testimonials -->
	<!--<div class="testimonials">
		<div class="container-fluid text-center">
			<h2>Testimonials</h2>
		</div>
		<div class="container-fluid">
			<div class="col-sm-4">
				Test 1
			</div>
			<div class="col-sm-4">
				Test 2
			</div>
			<div class="col-sm-4">
				Test 3
			</div>
		</div>
	</div>
	<!-- End Testimonials -->
<?php } ?>	
	

	</main><!-- #main -->
</div><!-- #primary -->

<!-- This adds the transition graphic to lead into the contact section -->
<?php if ( is_front_page() ) { ?>
	<div class="toptransition-grey-home"></div>
<?php } else { ?>
	<div class="toptransition-grey"></div>
<?php } ?>	
<?php
get_footer();
