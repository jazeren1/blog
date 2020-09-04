<?php
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
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
			<div class="top_row">
				<div class="flexrow">
					<div class="top_left">
						<div class="socialicons">
							<ul class="list">
								<li><a href="#"><img src="/jz/wp-content/themes/jz2020/img/Facebook.png"/></a></li>
								<li><a href="#"><img src="/jz/wp-content/themes/jz2020/img/Twitter.png"/></a></li>
								<li><a href="#"><img src="/jz/wp-content/themes/jz2020/img/Google.png"/></a></li>
								<li><a href="#"><img src="/jz/wp-content/themes/jz2020/img/git.png"/></a></li>
								<li><a href="#"><img src="/jz/wp-content/themes/jz2020/img/linkedin.png"/></a></li>
							</ul>
						</div>
						<div class="menu_list">
							<ul class="list">
								<li>ABOUT</li>
								<li>RESUME</li>
								<li>WEB WORK</li>
							</ul>
						</div>
					</div>
					<div id="headerlogo">
						<img src="/jz/wp-content/themes/jz2020/img/logo.png"/>
					</div>
					<div id="mobileNav" class="popup">
						<a class="wide" href="#"><span>Home</span></a>
						<a class="wide" href="#"><span>About</span></a>
						<a class="wide" href="#"><span>Resume</span></a>
						<a class="wide" href="#"><span>Web Work</span></a>
						<a class="wide" href="#"><span>Background</span></a>
						<a class="wide" href="#"><span>Blog</span></a>
						<a class="wide" href="#"><span>Contact</span></a>
			  		</div>
					<div id="hamburger">
						<a href="javascript:void(0);" class="icon" onclick="myFunction()">
							<img src="/jz/wp-content/themes/jz2020/img/hamburger.png"/>
						</a>
					</div>
					<div class="top_right">
						<div class="searchbar">
							<form id="search-form">
							    <div class="search">
							      <input type="text" name="search" class="searchbox" value="Search" />
							      <input type="submit" class="searchbutton" value="" />
							    </div>
							</form>
						</div>
						<div class="menu_list pull-right">
							<ul class="list">
								<li>BACKGROUND</li>
								<li>BLOG</li>
								<li>CONTACT</li>
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
-->

<div id="content" class="site-content">
