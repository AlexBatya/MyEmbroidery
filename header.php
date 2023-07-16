

 
<div class=" wrapper">
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <div class="header__logo">
                        <!-- <a href="#">
                            <img class="header__logo-img" src="<?php // bloginfo('template_url'); ?>/assets/img/logo.svg" alt="logo-header">
                        </a> -->
                        <?php the_custom_logo(array(
                            'class' => 'header__logo-img'
                        )); ?>
                    </div>

                    <ul class="header__top-list">
                        <li class="header__top-list--item"> <a class="header__top-list--link" href="#"><?php  the_field('field_list_1'); ?></a></li>
                        <li class="header__top-list--item"> <a class="header__top-list--link" href="#"><?php  the_field('field_list_2'); ?></a></li>
                        <li class="header__top-list--item"> <a class="header__top-list--link" href="#"><?php  the_field('field_list_3'); ?></a></li>
                    </ul>
                        
                    <div class="header__burger">
                        <img class="header__burger-img" src="<?php bloginfo('template_url'); ?>/assets/img/burger.svg" alt="burger">
                        <div class="header__burger-menu">
                            <div class="menu__btn-block">
                                <!-- <div class="menu__btn-title">Одежда</div> -->
                                <ul class="menu__btn-list menu__btn-list--1">
                                    <li class="menu__btn-item menu__btn-item-1 menu__btn-title">
                                        Для женщин

                                        <ul class="btn__block-list btn__block-list-1">
                                            <li class="btn__block-link"><a href="#">Показать все</a></li>
                                            <li class="btn__block-link"><a href="#">Халаты</a></li>
                                            <li class="btn__block-link"><a href="#">Худи</a></li>
                                            <li class="btn__block-link"><a href="#">Свитшоты</a></li>
                                            <li class="btn__block-link"><a href="#">Футболки</a></li>
                                            <li class="btn__block-link"><a href="#">Кепки</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu__btn-item menu__btn-title">
                                        Для мужчин

                                        <ul class="btn__block-list">
                                            <li class="btn__block-link"><a href="#">Показать все</a></li>
                                            <li class="btn__block-link"><a href="#">Худи</a></li>
                                            <li class="btn__block-link"><a href="#">Халаты</a></li>
                                            <li class="btn__block-link"><a href="#">Свитшоты</a></li>
                                            <li class="btn__block-link"><a href="#">Футболки</a></li>
                                            <li class="btn__block-link"><a href="#">Кепки</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu__btn-item menu__btn-title">
                                        Детям

                                        <ul class="btn__block-list">
                                            <li class="btn__block-link"><a href="#">Показать все</a></li>
                                            <li class="btn__block-link"><a href="#">Худи</a></li>
                                            <li class="btn__block-link"><a href="#">Свитшоты</a></li>
                                            <li class="btn__block-link"><a href="#">Халаты</a></li>
                                            <li class="btn__block-link"><a href="#">Футболки</a></li>
                                            <li class="btn__block-link"><a href="#">Кепки</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu__btn-item menu__btn-title">
                                        Комплекты

                                        <ul class="btn__block-list">
                                            <li class="btn__block-link"><a href="#">Показать все</a></li>
                                            <li class="btn__block-link"><a href="#">Худи</a></li>
                                            <li class="btn__block-link"><a href="#">Свитшоты</a></li>
                                            <li class="btn__block-link"><a href="#">Халаты</a></li>
                                            <li class="btn__block-link"><a href="#">Кепки</a></li>
                                            <li class="btn__block-link"><a href="#">Футболки</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu__btn-item menu__btn-title">
                                        Полотенца

                                        <ul class="btn__block-list">
                                            <li class="btn__block-link"><a href="#">Показать все</a></li>
                                            <li class="btn__block-link"><a href="#">Худи</a></li>
                                            <li class="btn__block-link"><a href="#">Свитшоты</a></li>
                                            <li class="btn__block-link"><a href="#">Кепки</a></li>
                                            <li class="btn__block-link"><a href="#">Халаты</a></li>
                                            <li class="btn__block-link"><a href="#">Футболки</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <!-- <div class="menu__btn-title">Аксессуары</div> -->
                                <!-- <ul class="menu__btn-list menu__btn-list--2">
                                <li class="menu__btn-item"><a href="#" class="menu__btn-link">Маски</a></li>
                                <li class="menu__btn-item"><a href="#" class="menu__btn-link">Головные уборы</a>
                                </li>
                                <li class="menu__btn-item"><a href="#" class="menu__btn-link">Телефон</a></li>
                                <li class="menu__btn-item"><a href="#" class="menu__btn-link">Сумки</a></li>
                                <li class="menu__btn-item"><a href="#" class="menu__btn-link">полотенца</a></li>
                            </ul> -->
                            </div>

                            <ul class="header__top-list">
                                <li class="header__top-list--item"> <a class="header__top-list--link"
                                        href="#">Компания</a></li>
                                <li class="header__top-list--item"> <a class="header__top-list--link"
                                        href="#">Каталог
                                        изделий</a></li>
                                <li class="header__top-list--item"> <a class="header__top-list--link"
                                        href="#">Помощь</a></li>
                            </ul>

                            <div class="header__init">
                                <a href="#" class="header__init-reg">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/user.svg" alt="Регистрация">
                                    Регистрация
                                </a>
                                <a href="#" class="header__init-auth">
                                    <img src="<?php bloginfo('template_url'); ?>/assets/img/login.svg" alt="Войти">
                                    Войти
                                </a>
                            </div>

                            <div class="header__burger-info info">
                                <div class="info__favs">
                                    <a href="#">Избранное</a>
                                </div>
                                <div class="info__card">
                                    <a href="#">Корзина (0)</a>
                                </div>
                            </div>

                            <ul class="header__burger-soc soc">
                                <li class="soc__item soc__item-1"><a class="header__soc-link" href="tel:<?php the_field('phone_number') ;?>"></a></li>
                                <li class="soc__item soc__item-2"><a class="header__soc-link" href="<?php the_field('vk'); ?>"></a></li>
                                <li class="soc__item soc__item-3"><a class="header__soc-link" href="<?php the_field('instagram'); ?>"></a></li>
                                <li class="soc__item soc__item-4"><a class="header__soc-link" href="<?php the_field('telegram'); ?>"></a></li>
                                <li class="soc__item soc__item-5"><a class="header__soc-link" href="<?php the_field('whatsApp'); ?>"></a></li>
                            </ul>
                        </div>
                    </div>

                    <ul class="header__soc soc">
                        <li class="soc__item soc__item-1"><a class="header__soc-link" href="tel:<?php the_field('phone_number') ;?>"></a></li>
                        <li class="soc__item soc__item-2"><a class="header__soc-link" href="<?php the_field('vk'); ?>"></a></li>
                        <li class="soc__item soc__item-3"><a class="header__soc-link" href="<?php the_field('instagram'); ?>"></a></li>
                        <li class="soc__item soc__item-4"><a class="header__soc-link" href="<?php the_field('telegram'); ?>"></a></li>
                        <li class="soc__item soc__item-5"><a class="header__soc-link" href="<?php the_field('whatsApp'); ?>"></a></li>
                    </ul>

                    <div class="header__init">
                        <a href="#" class="header__init-reg header__init-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/user.svg" alt="Регистрация" title="Зарегистрироваться">
                            Регистрация
                        </a>
                        <a href="#" class="header__init-auth header__init-item">
                            <img src="<?php bloginfo('template_url'); ?>/assets/img/login.svg" alt="Войти" title="Войти">
                            Войти
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
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
                            Свой дизайн <img class="menu__btn-img" src="<?php bloginfo('template_url'); ?>/assets/img/square.svg" alt="">
                            <!-- <div class="menu__btn-box btn__box">
                            <div class="btn__box-items">
                                <div class="btn__box-item btn__box-item--1">
                                    <div class="btn__box-item--title">Одежда</div>
                                    <ul class="btn__box-list">
                                        <li class="btn__box-list--item btn__box-list--item--1">
                                            <div class="btn__box-list--img"></div>Футболки
                                            <div class="btn__addlist btn__addlist--1">
                                                <ul class="btn__addlist-items">
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link"></a>Мужские</li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link"></a>Женские</li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link"></a>Парные</li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link"></a>Детские</li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="btn__box-list--item btn__box-list--item--2">
                                            <div class="btn__box-list--img"></div>Свитеры
                                            <div class="btn__addlist btn__addlist--2">
                                                <ul class="btn__addlist-items">
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Женские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Мужские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Детские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Парные</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="btn__box-list--item btn__box-list--item--3">
                                            <div class="btn__box-list--img"></div>Толстовки
                                            <div class="btn__addlist btn__addlist--3">
                                                <ul class="btn__addlist-items">
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Парные</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Женские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Мужские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Детские</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="btn__box-list--item btn__box-list--item--4">
                                            <div class="btn__box-list--img"></div>Халаты
                                            <div class="btn__addlist btn__addlist--4">
                                                <ul class="btn__addlist-items">
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Детские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Женские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Парные</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Мужские</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="btn__box-list--item btn__box-list--item--5">
                                            <div class="btn__box-list--img"></div>Тапки
                                            <div class="btn__addlist btn__addlist--5">
                                                <ul class="btn__addlist-items">
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Женские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Детские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Мужские</a></li>
                                                    <li class="btn__addlist-item"><a href="#"
                                                            class="btn__addlist-link">Парные</a></li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="btn__box-item btn__box-item--3">
                                    <div class="btn__box-item--title">Аксессуары</div>
                                    <ul class="btn__box-list">
                                        <li class="btn__box-list--item"><a href="#">
                                                <div class="btn__box-list--img"></div>
                                                Телефон
                                            </a></li>
                                        <li class="btn__box-list--item"><a href="#">
                                                <div class="btn__box-list--img"></div>
                                                Телефон
                                            </a></li>
                                        <li class="btn__box-list--item"><a href="#">
                                                <div class="btn__box-list--img"></div>
                                                Телефон
                                            </a></li>
                                        <li class="btn__box-list--item"><a href="#">
                                                <div class="btn__box-list--img"></div>
                                                Телефон
                                            </a></li>
                                        <li class="btn__box-list--item"><a href="#">
                                                <div class="btn__box-list--img"></div>
                                                Телефон
                                            </a></li>
                                    </ul>
                                    <div class="btn__box-item--subtitle">Корпоративные подарки</div>
                                </div>
                            </div>
                        </div> -->
                        </li>
                        <li class="header__menu-item header__menu-item--4">
                            Комплекты
                        </li>
                        <li class="header__menu-item header__menu-item--5">
                            Полотенца
                        </li>
                    </ul>
                    <div class="header__bottom-info info">
                        <div class="info__favs">
                            <a href="#"></a>
                        </div>
                        <div class="info__card">
                            <a href="#">
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
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

    </header>


