<?php
/*
Template Name: catalog 
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_field('home_title'); ?></title>
    <meta name="description" content="<?php the_field('home_discription'); ?>" />
    <?php wp_head();?>
</head>

<body>
    <?php get_header(); ?>

        <aside class="catalog-sidebar">
			<div class="container">
				<div class="catalog-sidebar__main">
					<div class="catalog-sidebar__title">
						Тип изделия
					</div>
					<form action="#" class="catalog-sidebar__form">
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" checked id="all"><label data-filter = 'all' for="all">Показать все</label> <br>
						</div>
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" id="bathrobe"><label data-filter = '<?php echo get_category(7, ARRAY_A )['slug'] ?>' for="bathrobe"><?php echo get_category(7, ARRAY_A )['name'] ?></label> <br>
						</div>
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" id="hoodies"><label data-filter = '<?php echo get_category(8, ARRAY_A )['slug'] ?>' for="hoodies"><?php echo get_category(8, ARRAY_A )['name'] ?></label> <br>
						</div>
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" id="sweatshirts"><label data-filter = '<?php echo get_category(9, ARRAY_A )['slug'] ?>' for="sweatshirts"><?php echo get_category(9, ARRAY_A )['name'] ?></label> <br>
						</div>
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" id="t-shirts"><label data-filter = '<?php echo get_category(10, ARRAY_A )['slug'] ?>' for="t-shirts"><?php echo get_category(10, ARRAY_A )['name'] ?></label> <br>
						</div>
						<div class="catalog-sidebar__form-checkbox">
							<input type="checkbox" id="caps"><label data-filter = '<?php echo get_category(11, ARRAY_A )['slug'] ?>' for="caps"><?php echo get_category(11, ARRAY_A )['name'] ?></label>
						</div>
					</form>
					<button class="catalog__mobile-back">
						<img src="<?php bloginfo('template_url') ?>/assets/img/arrow-back.svg" alt="">
					</button>
				</div>
			</div>
		</aside>

        <main class="main">
            
			<section class="catalog">
				<div class="container">
					<div class="catalog__main">
						<div class="catalog__top">
							<a href="#" class="catalog__top-item">Для Женщин</a>
							<a href="#" class="catalog__top-item active">Для Мужчин</a>
							<a href="#" class="catalog__top-item">Детям</a>
							<a href="#" class="catalog__top-item">Для Дома</a>
						</div>
						<div class="catalog-header header__bottom">
							<div class="container">
								<div class="header__bottom-inner">
									<ul class="header__bottom-menu header__menu">
										<li class="header__menu-item header__menu-item--1">
											Для женщин
										</li>
										<li class="header__menu-item header__menu-item--2">
											Для мужчин
										</li>
										<li class="header__menu-item header__menu-item--3">
											Детям
										</li>
										<li class="header__menu-item menu__btn">
											Свой дизайн <img class="menu__btn-img" src="<?php bloginfo('template_url') ?>/assets/img/square.svg" alt="">
										</li>
										<li class="header__menu-item header__menu-item--4">
											Комплекты
										</li>
										<li class="header__menu-item header__menu-item--5">
											Полотенца
										</li>
									</ul>
								</div>
								<ul class="header__submenu header__submenu-1">
									<li class="header__submenu-item">
										<a href="#">Показать все</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Халаты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Худи</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Свитшоты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Футболки</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Кепки</a>
									</li>
								</ul>
								<ul class="header__submenu header__submenu-2">
									<li class="header__submenu-item">
										<a href="#">Показать все</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Худи</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Халаты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Свитшоты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Футболки</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Кепки</a>
									</li>
								</ul>
								<ul class="header__submenu header__submenu-3">
									<li class="header__submenu-item">
										<a href="#">Показать все</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Халаты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Свитшоты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Худи</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Футболки</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Кепки</a>
									</li>
								</ul>
								<ul class="header__submenu header__submenu-4">
									<li class="header__submenu-item">
										<a href="#">Показать все</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Халаты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Худи</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Футболки</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Свитшоты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Кепки</a>
									</li>
								</ul>
								<ul class="header__submenu header__submenu-5">
									<li class="header__submenu-item">
										<a href="#">Показать все</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Халаты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Худи</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Свитшоты</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Кепки</a>
									</li>
									<li class="header__submenu-item">
										<a href="#">Футболки</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="catalog-mobile-crumbs">
							<a href="#">
								Каталог изделий /
							</a>
							<a href="#">
								Для мужчин /
							</a>
							<a href="#">
								Показать все
							</a>
						</div>
                        
						<div class="catalog__center">
							<div class="catalog__title title">
								Создайте свое <span>уникальное изделие</span>
							</div>
							<button class="catalog__mobile-filter">
								<img src="<?php bloginfo('template_url') ?>/assets/img/catalog/filter.svg" alt="">
							</button>
                            
                            

                                
                                            
                                
						</div>
					</div>
				</div>
			</section>
		</main>

        <?php get_footer(); ?>
        <?php // wp_footer(); ?>
</body>
</html>