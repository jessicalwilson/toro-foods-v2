<?php

/**
 * Page Header
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php $logo = get_field('logo', 'options'); ?>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="title" content="<?php wp_title('|', true, 'right'); ?>">
	<meta name="viewport" id="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=10.0,initial-scale=1.0,viewport-fit=cover" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_head(); ?>
</head>

<body class="body">
	<div class="site-container">
		<!-- Closes in footer.php -->
		<header class="header">
			<div class="header__wrapper">
				<div class="header__logo">
					<a class="header__logo-link" href="<?php echo esc_url(home_url('/')); ?>" rel="home"><img class="header__logo-image" src="<?php echo $logo; ?>"></a>
				</div>
				<div class="header__menu">
					<?php
						if (has_nav_menu('header')) :
							wp_nav_menu(array(
								'container'       => 'nav',
								'theme_location'  => 'header',
								'container_id'    => 'menu-container',
								'container_class' => 'menu-container',
								'menu_id'         => 'menu-list',
								'menu_class'      => 'menu-list',
							));
						endif;
					?>
					<a class="" href="">Cart</a>
					<a class="" href="">Search</a>
				</div>
			</div>
		</header>