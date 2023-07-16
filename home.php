<?php
/*
Template Name: home 
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php the_field('home_title'); ?></title>
    <meta name="description" content="<?php the_field('home_discription'); ?>" />
	<!-- <link rel="stylesheet" href="./<?php bloginfo('template_url'); ?>/assets/css/main.css"> -->
    <?php wp_head();?>
</head>

<body>
    <?php get_header(); ?>

    
    <main class="main">
        <div class="slider">
            <div class="container">

                <div class="slider__inner">
                    
                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category'    => get_cat_ID('Главный слайдер') 
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div class="slider__item slider__item-1"
                                        style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
                                        <div class="slider__item-title"><?php the_field('home_baner_name'); ?></div>
                                        <a href="#" class="slider__item-btn btn">
                                            <div>Свой дизайн</div> <img src="<?php bloginfo('template_url'); ?>/assets/img/square.svg" alt="">
                                        </a>
                                        <div class="slider__item-price price">
                                            <div class="price__title"><?php the_field('home_title_main_slider'); ?></div>
                                            <div class="price__num"><?php the_field('home_price_main_slider'); ?></div>
                                            <p class="price__desc"><?php the_field('home_p_main_slider'); ?></p>
                                        </div>
                                    </div>
                                <?php 
                            }
                            } else {
                                // Постов не найдено
                            }

                        wp_reset_postdata(); // Сбрасываем $post
                    ?>
                </div>
            </div>
        </div>
        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'title' => 'Наши преимущества'
            ]);
            if( $myposts){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="create">
                            <div class="container">
                                <div class="create__title title"><?php the_field('unique_product_name1') ?> <span><?php the_field('unique_product_name2') ?></span></div>
                                <p class="create__text"><?php the_field('unique_product_discription') ?></p>
                                <div class="create__inner">
                                    <ul class="create__list">
                                        <li class="create__list-item create-1">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title1') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription1') ?></div>
                                        </li>
                                        <li class="create__list-item create-2">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title2') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription2') ?></div>
                                        </li>
                                        <li class="create__list-item create-3">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title3') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription3') ?></div>
                                        </li>
                                        <li class="create__list-item create-4">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title4') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription4') ?></div>
                                        </li>
                                        <li class="create__list-item create-5">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title5') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription5') ?></div>
                                        </li>
                                        <li class="create__list-item create-6">
                                            <div class="create__list-item--title"><?php the_field('unique_product_title6') ?></div>
                                            <div class="create__list-item--subtitle"><?php the_field('unique_product_discription6') ?></div>
                                        </li>
                                    </ul>
                                    <div class="create__gallery">
                                        <!-- <div class="create__gallery-1"></div>
                                        <div class="create__gallery-2"></div>
                                        <div class="create__gallery-3"></div>
                                        <div class="create__gallery-4"></div> -->
                                        <img class="create__gallery-1" src="<?php the_field('unique_product_picture1') ?>"></img>
                                        <img class="create__gallery-2" src="<?php the_field('unique_product_picture2') ?>"></img>
                                        <img class="create__gallery-3" src="<?php the_field('unique_product_picture3') ?>"></img>
                                        <img class="create__gallery-4" src="<?php the_field('unique_product_picture4') ?>"></img>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                }
                } else {
                    // Постов не найдено
                }

            wp_reset_postdata(); // Сбрасываем $post
        ?>
        
        <div class="coll">
            <div class="container">
                <?php
                    global $post;

                    $myposts = get_posts([ 
                        'numberposts' => -1,
                        'title' => 'Коллекции'
                    ]);
                    if( $myposts){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                                <div class="coll__title title"><?php the_field('collection_name') ?></div>
                                <div class="coll__inner">
                                    <div class="coll__item coll__item-1">
                                        <img class="coll__item-img" src="<?php the_field('collection_picture1') ?>"></img>
                                        <div class="coll__item-title"><?php the_field('collection_title1') ?></div>
                                    </div>
                                    <div class="coll__item coll__item-2">
                                        <img class="coll__item-img" src="<?php the_field('collection_picture2') ?>"></img>
                                        <div class="coll__item-title"><?php the_field('collection_title2') ?></div>
                                    </div>
                                    <div class="coll__item coll__item-3">
                                        <img class="coll__item-img" src="<?php the_field('collection_picture3') ?>"></img>
                                        <div class="coll__item-title"><?php the_field('collection_title3') ?></div>
                                    </div>
                                </div>
                                <div class="coll__link link"> <a href="#"> Перейти в каталог
                                        <svg id="coll__link-img" xmlns="http://www.w3.org/2000/svg" width="59.272" height="37.905"
                                            viewBox="0 0 59.272 37.905">
                                            <g id="arrow_2" data-name="arrow 2" transform="translate(0)">
                                                <g id="Layer_x0020_1" transform="translate(26.104 9.257)">
                                                    <rect class="line" x="-28" y="9" width="54" height="2"></rect>
                                                    <path id="Контур_22" data-name="Контур 22"
                                                        d="M6.036,2.014A1.184,1.184,0,0,0,4.361,3.689l7.674,7.674L4.361,19.037a1.184,1.184,0,0,0,1.675,1.675l8.5-8.5.007-.007a1.185,1.185,0,0,0,0-1.675h0L6.036,2.014Z"
                                                        transform="translate(13.535 -1.667)" fill="#464646" />
                                                </g>
                                                <rect id="Прямоугольник_17" data-name="Прямоугольник 17" width="37.905"
                                                    height="37.905" transform="translate(21.366)" fill="none" />
                                            </g>
                                        </svg>

                                    </a>
                                </div>
                            <?php 
                        }
                        } else {
                            // Постов не найдено
                        }

                    wp_reset_postdata(); // Сбрасываем $post
                ?>
                
            </div>
        </div>

        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'title' => 'Как мы работаем'
            ]);
            if( $myposts){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="how">
                            <div class="container">
                                <div class="how__inner">
                                    <div class="how__title title"><?php the_field('how_we_work_name1') ?> <span><?php the_field('how_we_work_name2') ?></span></div>
                                    <div class="how__items">
                                        <div class="how__item">
                                            <div class="how__item-num">01.</div>
                                            <div class="how__item-title"><?php the_field('how_we_work_title01') ?></div>
                                            <p class="how__item-text"><?php the_field('how_we_work_discription01') ?></p>
                                        </div>
                                        <div class="how__item">
                                            <div class="how__item-num">02.</div>
                                            <div class="how__item-title"><?php the_field('how_we_work_title02') ?></div>
                                            <p class="how__item-text"><?php the_field('how_we_work_discription02') ?></p>
                                        </div>
                                        <div class="how__item">
                                            <div class="how__item-num">03.</div>
                                            <div class="how__item-title"><?php the_field('how_we_work_title03') ?></div>
                                            <p class="how__item-text"><?php the_field('how_we_work_discription03') ?></p>
                                        </div>
                                        <div class="how__item">
                                            <div class="how__item-num">04.</div>
                                            <div class="how__item-title"><?php the_field('how_we_work_title04') ?></div>
                                            <p class="how__item-text"><?php the_field('how_we_work_discription04') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
			            </div>
                    <?php 
                }
                } else {
                    // Постов не найдено
                }

            wp_reset_postdata(); // Сбрасываем $post
        ?>

        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'title' => 'Акции'
            ]);
            if( $myposts){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="stock">
                            <div class="container">
                                <div class="stock__inner">
                                    <div class="stock__title title"><?php the_field('stocks_name') ?></div>
                                    <div class="stock__items">
                                        <div class="stock__item">
                                            <a href="#" class="stock__item-fav">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/favs.svg" alt="">
                                            </a>
                                            <img class="stock__item-img" src="<?php the_field('stocks_picture1') ?>">
                                            <div class="stock__item-title"><?php the_field('stocks_title1') ?></div>
                                        </div>
                                        <div class="stock__item">
                                            <a href="#" class="stock__item-fav">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/favs.svg" alt="">
                                            </a>
                                            <img class="stock__item-img" src="<?php the_field('stocks_picture2') ?>">
                                            <div class="stock__item-title"><?php the_field('stocks_title2') ?></div>
                                        </div>
                                        <div class="stock__item">
                                            <a href="#" class="stock__item-fav">
                                                <img src="<?php bloginfo('template_url'); ?>/assets/img/favs.svg" alt="">
                                            </a>
                                            <img class="stock__item-img" src="<?php the_field('stocks_picture3') ?>">
                                            <div class="stock__item-title"><?php the_field('stocks_title3') ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php 
                }
                } else {
                    // Постов не найдено
                }

            wp_reset_postdata(); // Сбрасываем $post
        ?> 
        
        
        <div class="now">
            <div class="container">
                <div class="now__title title">Сделайте заказ <span>прямо сейчас</span></div>
                <div class="now__text">Просто оставьте заявку и наши менеджеры свяжутся с вами в течение 15 минут.
                </div>
                <a class="now__btn btn">
                    <div>Свой дизайн</div> <img src="<?php bloginfo('template_url'); ?>/assets/img/square.svg" alt="">
                </a>
            </div>
        </div>
        <div class="our">
            <div class="container">
                <div class="our__inner">
                    <div class="our__control">
                        <div class="our__control-title title">Наши работы</div>
                        <div class="our__control-text">Смотреть больше в разделе "Компания"</div>
                    </div>
                    <div class="our__slides">

                    <?php
                        global $post;

                        $myposts = get_posts([ 
                            'numberposts' => -1,
                            'category'    => get_cat_ID('SliderOur') 
                        ]);

                        if( $myposts ){
                            foreach( $myposts as $post ){
                                setup_postdata( $post );
                                ?>
                                    <div>
                                        <div class="our__slide">
                                            <?php 
                                            the_post_thumbnail(
                                                array('auto', 'auto'),
                                                array(
                                                    'class' => 'our__slide-img'
                                                )
                                            ); 
                                            ?> 
                                        </div>
                                    </div>
                                <?php 
                            }
                            } else {
                                // Постов не найдено
                            }

                        wp_reset_postdata(); // Сбрасываем $post
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <?php
            global $post;

            $myposts = get_posts([ 
                'numberposts' => -1,
                'title' => 'Отзывы о нас'
            ]);
            if( $myposts){
                foreach( $myposts as $post ){
                    setup_postdata( $post );
                    ?>
                        <div class="reviews">
                            <div class="container">
                                <div class="reviews__inner">
                                    <div class="reviews__title title"><?php the_field('reviews_about_us_title1'); ?> <span><?php the_field('reviews_about_us_title2'); ?></span></div>
                                    <div class="reviews__subtitle"><?php the_field('reviews_about_us_discription') ?></div>
                                    <div class="reviews__items">
                                        <div class="reviews__item reviews__item-1">
                                            <div style = 'background: url("<?php the_field('reviews_about_us_picture1'); ?>") top / cover' class="reviews__item-img"></div>
                                        </div>
                                        <div class="reviews__item reviews__item-2">
                                            <div style = 'background: url("<?php the_field('reviews_about_us_picture2'); ?>") top / cover' class="reviews__item-img"></div>
                                        </div>
                                        <div class="reviews__item reviews__item-3">
                                            <div style = 'background: url("<?php the_field('reviews_about_us_picture3'); ?>") top / cover' class="reviews__item-img"></div>
                                        </div>
                                    </div>
                                    <div class="reviews__link link"> <a href="#"> Отзывы о нас
                                            <svg id="coll__link-img" xmlns="http://www.w3.org/2000/svg" width="59.272"
                                                height="37.905" viewBox="0 0 59.272 37.905">
                                                <g id="arrow_2" data-name="arrow 2" transform="translate(0)">
                                                    <g id="Layer_x0020_1" transform="translate(26.104 9.257)">
                                                        <rect class="line" x="-28" y="9" width="54" height="2"></rect>
                                                        <path id="Контур_22" data-name="Контур 22"
                                                            d="M6.036,2.014A1.184,1.184,0,0,0,4.361,3.689l7.674,7.674L4.361,19.037a1.184,1.184,0,0,0,1.675,1.675l8.5-8.5.007-.007a1.185,1.185,0,0,0,0-1.675h0L6.036,2.014Z"
                                                            transform="translate(13.535 -1.667)" fill="#464646" />
                                                    </g>
                                                    <rect id="Прямоугольник_17" data-name="Прямоугольник 17" width="37.905"
                                                        height="37.905" transform="translate(21.366)" fill="none" />
                                                </g>
                                            </svg>

                                        </a></div>
                                </div>
                            </div>
                        </div>
                    <?php 
                }
                } else {
                    // Постов не найдено
                }

            wp_reset_postdata(); // Сбрасываем $post
        ?>
        
    </main>

        <?php get_footer(); ?>
        <?php  wp_footer(); ?>
</body>
</html>