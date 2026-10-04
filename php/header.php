<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package iGaming
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" type="image/svg+xml" href="<?php echo get_template_directory_uri(); ?>/assets/images/advantages/main-card-backround.svg">
	<meta name="description" content="GoldWin — топовая партнёрская программа для вебмастеров и арбитражников. RevShare от 50%, CPA до 200$, мгновенные выплаты без холда. Подключайся и зарабатывай на трафике уже сегодня.">

	<meta property="og:title" content="GoldWin — зарабатывай с лучшей игровой платформой" />
	<meta property="og:description" content="🎰 Высокий RevShare, щедрый CPA и моментальные выплаты без холда. Присоединяйся к партнёрской программе GoldWin и увеличивай доход на своём трафике." />
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/website/og-site-image.jpg" />
	<meta property="og:url" content="<?php echo get_permalink(); ?>" />
	<meta property="og:type" content="website" />
	<meta property="og:image:width" content="1920" />
	<meta property="og:image:height" content="1080" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<header class="header">
		<div class="center">
			<div class="header__logo logo">
				<a class="logo__link" href="/../">
					<img class="logo__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo-image.svg" alt="Логотип">
				</a>
			</div>

			<nav class="header__nav nav">
				<?php 
					$custom_header_menu = wp_nav_menu( [
						'theme_location'  => 'header_menu',
						'menu_class'      => 'nav__list nav__list--header',
						'echo' => false,
						'container'       => false, 
						] );

						echo  $custom_header_menu;
				?>
				
				<ul class="nav__socials socials">
					<li class="socials__item socials__item--padd">
						<a class="socials__link" href="https://vk.com/" target="_blank">
							<svg class="socials__icon socials__icon--telegram" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-telegram"></use>
							</svg>
						</a>
					</li>
					<li class="socials__item socials__item--padd">
						<a class="socials__link" href="https://telegram.org/" target="_blank">
							<svg class="socials__icon socials__icon--vk" viewBox="0 0 24 24">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-vk"></use>
							</svg>
						</a>
					</li>
				</ul>

				<a class="nav__btn" href="#!">Регистрация</a>
			</nav>

			<div class="mobile-menu">
				<input id="menu-switch" type="checkbox">
				<label class="mobile-menu__burger" for="menu-switch">
					<span></span>
				</label>
				<div class="mobile-menu__wrapper">

					<nav class="mobile-menu__box nav">
						<?php 
							$mobile_menu = wp_nav_menu( [
								'theme_location'  => 'header_menu_mobile',
								'menu_class'      => 'nav__list nav__list--mobile',
								'echo' => false,
							] );

							echo  $mobile_menu;
						?>

						<a class="nav__btn" href="#!">Регистрация</a>

						<ul class="nav__socials socials">
							<li class="socials__item">
								<a class="socials__link" href="https://vk.com/" target="_blank">
									<svg class="socials__icon socials__icon--telegram" viewBox="0 0 24 24">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-telegram"></use>
									</svg>
								</a>
							</li>
							<li class="socials__item">
								<a class="socials__link" href="https://telegram.org/" target="_blank">
									<svg class="socials__icon socials__icon--vk" viewBox="0 0 24 24">
										<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#social-vk"></use>
									</svg>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>

