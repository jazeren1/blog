<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script>
		function myFunction() {
		  var x = document.getElementById("mobileNav");
		  if (x.style.display === "block") {
		    x.style.display = "none";
		  } else {
		    x.style.display = "block";
		  }
		}
	</script>
	<?php wp_head(); ?>
	<!-- Dynamic styles -->
	<style type="text/css">
		#header-inner-page {
			<?php 
				//resume
				if (get_the_ID() == "15") {
			?>
					background-image: url("/wp-content/themes/jz2020/img/experience.png");
			<?php 
				}	
				//about
				if (get_the_ID() == "9") {
			?>
				background-image: url("/wp-content/themes/jz2020/img/me2.png");
			<?php 
				}
				//webwork
				//if (get_the_ID() == "11") {
			?>
				/*background-image: url("/wp-content/themes/jz2020/img/webwork_head.png");*/
			<?php 
				//}
			?>

		}
	</style>
	</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<!--
<div id="page" class="site">
-->


	<!-- Header Start -->
<?php if ( is_front_page() ) { ?>
	<div id="header">
<?php } else { ?>
	<div id="header-inner-page">
<?php } ?>	
		<div class="container-fluid">
			<?php //echo get_the_ID(); ?>
			<div class="top_row">
				<div class="flexrow">
					<div class="top_left">
						<div class="socialicons">
							<ul class="list">
								<li><a href="https://www.facebook.com/john.zeren" target="_blank"><img src="/wp-content/themes/jz2020/img/Facebook.png" /></a></li>
								<li><a href="https://twitter.com/jazeren1" target="_blank"><img src="/wp-content/themes/jz2020/img/Twitter.png"/></a></li>
								<li><a href="https://plus.google.com/u/0/117145414466979298483/posts" target="_blank"><img src="/wp-content/themes/jz2020/img/Google.png"/></a></li>
								<li><a href="https://github.com/jazeren1" target="_blank"><img src="/wp-content/themes/jz2020/img/git.png"/></a></li>
								<li><a href="https://www.linkedin.com/in/john-zeren-7591ba53/" target="_blank"><img src="/wp-content/themes/jz2020/img/linkedin.png"/></a></li>
							</ul>
						</div>
						<div class="menu_list">
							<ul class="list">
								<li><a href="/about/">ABOUT</a></li>
								<li><a href="/resume/">RESUME</a></li>
								<li><a href="/web-work/">WEB WORK</a></li>
							</ul>
						</div>
					</div>
					<div id="headerlogo">
						<a href="<?php echo home_url(); ?>"><img src="/wp-content/themes/jz2020/img/logo.png"/></a>
					</div>
					<div id="mobileNav" class="popup">
						<a class="wide" href="/"><span>Home</span></a>
						<a class="wide" href="/about/"><span>About</span></a>
						<a class="wide" href="/resume/"><span>Resume</span></a>
						<a class="wide" href="/web-work/"><span>Web Work</span></a>
						<a class="wide" href="/background'"><span>Background</span></a>
						<a class="wide" href="/blog/"><span>Blog</span></a>
						<a class="wide" href="/contact/"><span>Contact</span></a>
			  		</div>
					<div id="hamburger">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
							<img src="/wp-content/themes/jz2020/img/hamburger.png"/>
						</a>
					</div>
					<div class="top_right">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Header") ) : ?>
						<?php endif;?>
						<div class="searchbar">
							<form id="search-form">
							    <div class="search-box">
							      <input type="text" name="s" class="searchbox" value="Search" />
							      <input type="submit" class="searchbutton" value="" />
							    </div>
							</form>
						</div>
						<div class="menu_list pull-right">
							<ul class="list">
								<li><a href="/background/">BACKGROUND</a></li>
								<li><a href="/blog/">BLOG</a></li>
								<li><a href="/contact/">CONTACT</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<?php if ( is_front_page() ) { ?>
			<div id="headertext">
				<h2>ENGINEER. ENTREPRENEUR.</h2>
				<p>WOrked across multiple business unites as a software engineer and implimentation consultant. <a href="#">sometext</a></p>

				<a class="no-hover no-visited no-focus" href="#"><span class="orange-cta">READ MORE</span></a>
			</div>
			<?php }  ?>
		</div>
		<?php if ( is_front_page() ) { ?>
		<div class="toptransition">
		</div>
		<?php } else { ?>
		<div class="toptransition-inner">
		</div>
		<?php } ?>			

	</div>
<!--
	</div>


<div id="content" class="site-content">
-->