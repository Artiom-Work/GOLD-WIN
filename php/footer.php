<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iGaming
 */

?>

<footer class="footer">
		<div class="center">
			<nav class="footer__nav nav">
				<div class="footer__logo logo">
					<a class="logo__link" href="/../">
						<img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-image.svg" alt="Логотип">
					</a>
				</div>

				<?php
					$menu = wp_nav_menu( [
						'theme_location'  => 'footer_menu',
						'menu_class'      => 'nav__list nav__list--footer',
						'echo' => false,
					] );

					echo $menu;
				?>

				<ul class="nav__socials socials socials--footer">
					<li class="socials__item socials__item--footer">
						<a class="socials__link" href="https://telegram.org/" target="_blank">
							<svg class="socials__icon socials__icon--telegram" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-telegram"></use>
							</svg>
						</a>
					</li>
					<li class="socials__item socials__item--footer">
						<a class="socials__link" href="https://vk.com/" target="_blank">
							<svg class="socials__icon socials__icon--vk" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-vk"></use>
							</svg>
						</a>
					</li>
				</ul>
			</nav>

			<div class="footer__copyright">
				<p class="footer__copyright-text">
					&copy;&nbsp;GoldWin 2024. Все права защищены. Несанкционированное воспроизведение, модификация,
					распространение, публикация, передача или любая форма копирования строго запрещены.
				</p>
			</div>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>

</html>
