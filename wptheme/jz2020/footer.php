<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

	<!-- Contact me -->
	<div class="contact">
		<div class="container-fluid text-center">
			<h2>Contact Me</h2>
		</div>
		<div class="container-fluid row">
			<div class="contact-additional column">
				<div>
					<img src="/jz/wp-content/themes/jz2020/img/address.png"/>
					<div class="contact-info">
						<p>Raleigh, North Carolina</p>
						<p>United States</p>
					</div>
				</div>
				<div class="spacer"></div>
				<div>
					<img src="/jz/wp-content/themes/jz2020/img/email.png"/>
					<div class="contact-info">
						<p>Email:</p>
						<p>john@johnzeren.com</p>
					</div>
				</div>
				<div class="spacer"></div>
				<div class="spacer"></div>
				<div>
					<img src="/jz/wp-content/themes/jz2020/img/socialicons.png"/>
				</div>
			</div>
			<div class="column66">
				<form>
					<div>
						<label for="first">First Name</label>
					</div>
					<input class="contact-input" type="text" name="first"/>
					<div>
						<label for="email">Email</label>
					</div>
					<input class="contact-input" type="text" name="email"/>
					<div>
						<label for="message">Leave Us a Message</label>
					</div>
					<textarea class="contact-input" name="message"></textarea> 
					<div>
						<input class="contact-submit" type="submit" name="submit"/>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">

		<div id="footer">
			<div class="container-fluid">
				<div>
					<div><a href="<?php echo home_url(); ?>"><img src="/jz/wp-content/themes/jz2020/img/logo_yellow.png"/></a></div>
					<div>
						<ul class="list footer_menu_list">
							<li>Home</li>
							<li>About</li>
							<li>Resume</li>
							<li>Web Work</li>
							<li>Background</li>
							<li>Blog</li>
							<li>Contact Us</li>
						</ul>
					</div>
					<div>
					<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
						<div class="site-info">
							<?php $blog_info = get_bloginfo( 'name' ); ?>
							<?php if ( ! empty( $blog_info ) ) : ?>
								<a class="site-name" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>,
							<?php endif; ?>
							<?php
							if ( function_exists( 'the_privacy_policy_link' ) ) {
								the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
							}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>


			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
	</footer><!-- #colophon -->
<!--
</div><!-- #page 
-->
<?php wp_footer(); ?>

</body>
</html>
