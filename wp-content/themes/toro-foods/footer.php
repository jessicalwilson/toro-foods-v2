<?php

/**
 * Page Footer
 */
?>
</div><!-- END: .site -->

<?php
$logo = get_field('logo', 'options');
$footer_copy = get_field('footer_copy', 'options');

$address = get_field('address', 'options');
$phone_number = get_field('phone_number', 'options');
$contact_email = get_field('contact_email', 'options');

$instagram = get_field('instagram', 'options');
$pinterest = get_field('pinterest', 'options');
$facebook = get_field('facebook', 'options');
$linkedin = get_field('linkedin', 'options');

?>

<footer class="footer">
	<div class="footer__top">
		<div class="footer__logo-copy">
			<img class="footer__logo" src="<?php echo $logo; ?>">
			<p class="footer__copy"><?php echo $footer_copy; ?></p>
		</div>

		<div class="footer__menu">
			<?php
			if (has_nav_menu('footer')) :
				wp_nav_menu(array(
					'container'       => 'nav',
					'theme_location'  => 'footer',
					'container_id'    => 'footer__nav',
					'container_class' => 'footer__nav',
					'menu_id'         => 'footer__nav-list',
					'menu_class'      => 'footer__nav-list',
				));
			endif;
			?>
		</div>

		<div class="footer__company-information">
			<h1 class="footer__heading">Connect With Us</h1>
			<p class="footer__address"><?php echo $address; ?></p>
			<a class="footer__telephone" href="tel:<?php echo preg_replace('/[^0-9]/s', '', $phone_number); // strip non-numeric characters; 
									?>"><?php echo $phone_number; ?></a>
			<a class="footer__email" href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a>
			<div class="footer__social-media">
				<a class="footer__instagram" href="<?php echo $instagram; ?>">Instagram</a>
				<a class="footer__pinterest" href="<?php echo $pinterest; ?>">Pinterest</a>
				<a class="footer__facebook" href="<?php echo $facebook; ?>">Facebook</a>
				<a class="footer__linkedin" href="<?php echo $linkedin; ?>">LinkedIn</a>
			</div>
		</div>

		<?php get_template_part('partials/footer-blog'); ?>
	</div>

	<div class="footer__bottom">
		<div class="footer__utility-menu">
			<?php
			if (has_nav_menu('footer-utility')) :
				wp_nav_menu(array(
					'container'       => 'nav',
					'theme_location'  => 'footer-utility',
					'container_id'    => 'footer-utility__nav',
					'container_class' => 'footer-utility__nav',
					'menu_id'         => 'footer-utility__nav-list',
					'menu_class'      => 'footer-utility__nav-list',
				));
			endif;
			?>
		</div>
		<p class="footer__copyright">Copyright &copy; <?php echo date('Y') ?> Toro Foods</p>
	</div>

	<?php wp_footer(); ?>
</footer>

</body>

</html>