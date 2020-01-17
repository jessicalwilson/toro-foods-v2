<?php

/**
 * Page Footer
 */
?>
</div><!-- END: .site -->
<footer class="footer">
	<div class="footer__top">
		<div class="footer__copy">
			<img class="" src="">
			<p></p>
		</div>

		<div class="footer__menu">
			<?php
				if (has_nav_menu('footer')) :
					wp_nav_menu(array(
						'container'       => 'nav',
						'theme_location'  => 'footer',
						'container_id'    => 'footer__nav',
						'container_class' => 'footer__nav',
						'menu_id'         => 'footer__nav__list',
						'menu_class'      => 'footer__nav__list',
					));
				endif;
			?>
		</div>

		<div class="footer__social"></div>

		<div class="footer__blog"></div>
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
						'menu_id'         => 'footer-utility__nav__list',
						'menu_class'      => 'footer-utility__nav__list',
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