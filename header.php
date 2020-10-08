<!doctype html>
<html lang="en-US">
<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta charset="UTF-8">
</head>
<body <?php body_class(); ?> itemscope="itemscope" itemtype="https://schema.org/WebPage">
	<header id="header">
		<div class="logo-container">
			<a href="<?php echo home_url();?>"><span class="icon-logo"></span></a>
			<a href="<?php echo home_url();?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
		</div>
		<div class="nav-wrapper">
			  <div class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="icon-menu"></span>
            <span class="icon-close hidden-mobile"></span>
          </div>
		<nav class="header-menu hidden-mobile">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</nav>
	</div>
	</header>
	<div id="site-content">