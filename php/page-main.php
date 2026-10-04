<?php
/* 
	Template Name: Шаблон "Главная страница"
*/
?>

<?php get_header(); ?>

<main>
		<section class="promo">
			<div class="center">
				<div class="promo__description">
					<h1 class="promo__title">
						<?php the_field('promo_title'); ?>
					</h1>
					<p class="promo__text">
						<?php the_field('promo_subtitle'); ?>
					</p>
					<div class="promo__buttons">
						<a class="promo__btn promo__btn--accent" href="<?php the_field('promo_main_btn_url'); ?>">
							<span><?php the_field('promo_main_btn_text'); ?></span>
						</a>
						<a class="promo__btn" href="<?php the_field('promo_messager_link'); ?>">
							<span class="promo__btn-text--desktop">Менеджер</span>
							<span class="promo__btn-text--mobile">Поддержка</span>

							<img class="promo__btn-icon" src="<?php the_field('promo_messager_icon'); ?>" width="24" height="24" alt="Иконка соцсети">
						</a>
					</div>
				</div>

				<?php if( have_rows('promo_bages_group') ): ?>
					<?php while( have_rows('promo_bages_group') ): the_row(); ?>
						<ul class="promo__badges">
							<li class="promo__badge">
								<h2 class="promo__badge-name"><?php the_sub_field('promo_badge_1'); ?></h2>
								<span class="promo__badge-text"><?php the_sub_field('promo_badge_text_1'); ?></span>
							</li>
							<li class="promo__badge">
								<h2 class="promo__badge-name"><?php the_sub_field('promo_badge_2'); ?></h2>
								<span class="promo__badge-text"><?php the_sub_field('promo_badge_text_2'); ?></span>
							</li>
							<li class="promo__badge">
								<h2 class="promo__badge-name"><?php the_sub_field('promo_badge_3'); ?></h2>
								<span class="promo__badge-text"><?php the_sub_field('promo_badge_text_3'); ?></span>
							</li>
						</ul>
					<?php endwhile; ?>
				<?php endif; ?>
				
				<?php if( have_rows('promo_bg_images') ): ?>
					<?php while( have_rows('promo_bg_images') ): the_row(); ?>
						<picture class="promo__image-wrapper">
							<source srcset="<?php the_sub_field('promo_main_image_desktop'); ?> , <?php the_sub_field('promo_main_image_desktop_x2'); ?>"
								media="(min-width: 1000px)">
							<source srcset="<?php the_sub_field('promo_main_image_mobile'); ?> , <?php the_sub_field('promo_main_image_mobile_x2'); ?>"
							media="(max-width: 767px)">
						
							<img class="promo__image" src="<?php the_sub_field('promo_main_image_tablet'); ?> "
							srcset="<?php the_sub_field('promo_main_image_tablet_x2'); ?>" alt="<?php the_sub_field('promo_main_image_alt'); ?>">
						</picture>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</section>

		<div class="privilege">
			<div class="center">
				<ul class="privilege__list">
					<li class="privilege__list-item">
						<div class="privilege__image-wrapper">
							<svg class="privilege__image iron-image">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#privilege-present"></use>
							</svg>
						</div>
						<p class="privilege__text">
							Щедрые бонусы для удердажания каждого&nbsp;игрока
						</p>
					</li>
					<li class="privilege__list-item privilege__list-item--medium">
						<div class="privilege__image-wrapper">
							<svg class="privilege__image privilege__image--dice iron-image">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#privilege-dice"></use>
							</svg>
						</div>
						<p class="privilege__text">
							Множество слотов и&nbsp;провайдеров&nbsp;+&nbsp;fast games
						</p>
					</li>
					<li class="privilege__list-item privilege__list-item--small">
						<div class="privilege__image-wrapper">
							<svg class="privilege__image privilege__image--car iron-image">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#privilege-car"></use>
							</svg>
						</div>
						<p class="privilege__text">
							Быстрые выплаты игрокам и&nbsp;партнерам
						</p>
					</li>
					<li class="privilege__list-item privilege__list-item--big">
						<div class="privilege__image-wrapper">
							<svg class="privilege__image iron-image">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#privilege-coins"></use>
							</svg>
						</div>
						<p class="privilege__text">
							Crypto и&nbsp;фиатные методы вывода заработка
						</p>
					</li>
					<li class="privilege__list-item">
						<div class="privilege__image-wrapper">
							<svg class="privilege__image iron-image">
								<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#privilege-graph"></use>
							</svg>
						</div>
						<p class="privilege__text">
							Высокие показатели конверсии
						</p>
					</li>
				</ul>
			</div>
		</div>

		 <section class="advantages" id="advantages">
			<div class="center">
				<h2 class="advantages__heading section-heading">
					Развитая экосистема для&nbsp;максимального дохода
				</h2>
				<ul class="advantages__list">
					<li class="advantages__list-item">
						<h3 class="advantages__name advantages__name--big">
							Собственные уникальные игры от GoldWin
						</h3>

						<img class="advantages__main-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/advantages/main-card-image.png"
							srcset="<?php echo get_template_directory_uri(); ?>/assets/images/advantages/main-card-image@2x.png" alt="Телефон с играми от goldwin">
					</li>
					<li class="advantages__list-item">
						<h3 class="advantages__name">
							Разные модели <br>сотрудничества
						</h3>
						<p class="advantages__description">
							У&nbsp;нас есть 3&nbsp;модели сотрудничества:
							RevShare от&nbsp;50%, с&nbsp;депозитов от&nbsp;15% и&nbsp;СРА до&nbsp;200$
						</p>
						<div class="advantages__decor-graph">
							<span class="advantages__description advantages__description--small">CPA</span>
							<span class="advantages__description advantages__description--small">RevShare</span>
							<span class="advantages__description advantages__description--small">Гибрид</span>
						</div>
					</li>
					<li class="advantages__list-item">
						<h3 class="advantages__name">Свой продукт</h3>
						<p class="advantages__description">
							Лучшая конверсия и&nbsp;понятный интерфейс. Миллионы пользователей выбирают Goldwin.
						</p>
					</li>
					<li class="advantages__list-item">
						<h3 class="advantages__name">
							Детальная статистика по&nbsp;каждой компании
						</h3>
					</li>
					<li class="advantages__list-item">
						<h3 class="advantages__name">Качественные промоматериалы</h3>
						<div class="advantages__icons">
							<div class="advantages__icon">
								<svg class="advantages__icons-image advantages__icons-image--painting iron-image">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#advantage-painting"></use>
								</svg>
							</div>
							<div class="advantages__icon">
								<svg class="advantages__icons-image advantages__icons-image--document iron-image">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#advantage-document"></use>
								</svg>
							</div>
						</div>
					</li>
					<li class="advantages__list-item">
						<h3 class="advantages__name">
							Моментальные выплаты по&nbsp;RevShare без холда
						</h3>
						<div class="advantages__icons">
							<div class="advantages__icon">
								<svg class="advantages__icons-image advantages__icons-image--card iron-image">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#advantage-card"></use>
								</svg>
							</div>
							<div class="advantages__icon">
								<svg class="advantages__icons-image advantages__icons-image--chat iron-image">
									<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/images/icons/sprite-icons.svg#advantage-chat"></use>
								</svg>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</section>

		 <section class="faq">
			<div class="center">
				<h2 class="faq__title section-heading">
					Ответы на&nbsp;часто задаваемые вопросы
				</h2>

				<p class="faq__text accordion__text--center">
					Мы&nbsp;&mdash; партнёрская программа лучшего iGaming проекта GoldWin. С&nbsp;нами ты&nbsp;получишь высокую
					конверсию, лучшие условия монетизации на&nbsp;рынке и&nbsp;постоянные выплаты без холда
				</p>

				<ul id="accordion" class="accordion">
					<?php
						global $post;

						$myposts = get_posts([
							'numberposts' => -1,
							'category_name' => 'faq',
							'order'       => 'ASC',
						]);

						if( $myposts ){
							foreach( $myposts as $post ){
								setup_postdata( $post );
						?>

						<li class="accordion-item">
							<div class="accordion-item__button">
								<h3 class="accordion-item__title">
									<?php the_title(); ?>
								</h3>
							</div>

							<div class="accordion-item__body">
								<p class="accordion-item__text">
									<?php the_content(); ?>
								</p>
							</div>
						</li>

						<?php	} } wp_reset_postdata(); ?>
				</ul>
			</div>
		</section> 

		 <section class="reviews" id="reviews">
			<div class="center">
				<h2 class="reviews__title section-heading">
					Отзывы наших партнеров
				</h2>
				<p class="reviews__text reviews__text--subtitle">
					Наши партнеры делятся успехами, которых они достигли, работая с&nbsp;нами
				</p>
			</div>

			<div class="center--big">
				<div class="swiper reviews-swiper">
					<ul class="swiper-wrapper reviews__list">
								<?php
									global $post;

									$myposts = get_posts([
										'numberposts' => -1,
										'category_name' => 'reviews-slider',
									]);

									if( $myposts ){
										foreach( $myposts as $post ){
											setup_postdata( $post );
									?>

									<li class="reviews-card swiper-slide">
										<article>
											<div class="reviews-card__header">
												<?php the_post_thumbnail(array(82, 82), array(
														'class' => 'reviews-card__image'  
													)); ?>

												<div>
													<h3 class="reviews-card__name"><?php the_title(); ?></h3>
													<span class="reviews__text"><?php the_date(); ?></span>
												</div>
											</div>

											<p class="reviews__text">
												<?php the_content(); ?>
											</p>
										</article>
									</li>
									<?php	} } wp_reset_postdata(); ?>
					</ul>
				</div>
			</div>

		</section> 

		<section class="contacts" id="contacts">
			<div class="center">
				<div class="contacts__wrapper-bg">
					<h2 class="contacts__title section-heading">
						<?php the_field('contacts_title'); ?>
					</h2>

					<p class="contacts__text">
						<?php the_field('contacts_subtitle'); ?>
					</p>

					<a class="contacts__btn" href="<?php the_field('contacts_main_button_href'); ?>">
						<span><?php the_field('contacts_main_button_text'); ?></span>
					</a>

					<ul class="contacts__socials">
						<li class="contacts__socials-item">
							<a class="contacts__socials-link" href="<?php the_field('contacts_social_link_1'); ?>" target="_blank">
								<img class="contacts__socials-icon" src="<?php the_field('contacts_social_icon_1'); ?>" width="28" height="28"
									alt="Иконка Telegram">
							</a>
						</li>
						<li class="contacts__socials-item">
							<a class="contacts__socials-link" href="<?php the_field('contacts_social_link_2'); ?>" target="_blank">

								<img class="contacts__socials-icon" src="<?php the_field('contacts_social_icon_2'); ?>" width="28" height="28"
									alt="Иконка VKontakte">
							</a>
						</li>
					</ul>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>