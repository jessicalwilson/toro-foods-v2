<?php

/**
 * Page Header
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="title" content="<?php wp_title('|', true, 'right'); ?>">
	<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0,viewport-fit=cover" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body class="body">
	<div class="site">
		<!-- Closes in footer.php -->
		<header class="site-header">
			<div class="header__wrapper">
				<div class="logo">
					<a class="header__logo" href="<?php echo esc_url(home_url('/')); ?>" rel="home">Logo Here</a>
				</div>
				<div class="navigation">
					<?php
						if (has_nav_menu('header')) :
							wp_nav_menu(array(
								'container'       => 'nav',
								'theme_location'  => 'header',
								'container_id'    => 'header__nav',
								'container_class' => 'header__nav',
								'menu_id'         => 'header__nav__list',
								'menu_class'      => 'header__nav__list',
							));
						endif;
					?>
					<a href="">Cart</a>
					<a href="">Search</a>
				</div>
			</div>
		</header>