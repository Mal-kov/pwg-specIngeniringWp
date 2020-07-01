<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package specIn
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="scrollTopArrow">
    <button class="scrollToTop"><i class="fas fa-angle-up"></i></button>
</div>

<header style="background: url(<?php bloginfo( 'template_url' ); ?>/assets/images/1sec_bg.jpg);">
    <div class="menu-top">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-headerLogo.png" alt="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
<!--                --><?php
//                wp_nav_menu(
//                    array(
//                        'theme_location' => 'menu-1',
//                        'menu_id'        => 'primary-menu',
//                    )
//                );
//                ?>
                <ul id="mainMenu" class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">О компании </a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Услуги
                            <span class="sr-only">(current)</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#videoBlock">Видеонаблюдение</a>
                            <a class="dropdown-item" href="#alarmSystem">Сигнализация</a>
                            <a class="dropdown-item" href="#skud">Контроль доступа</a>
                            <a class="dropdown-item" href="#tvBlock">Телевидение</a>
                            <a class="dropdown-item" href="#gsmBlock">GSM оборудование</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Контакты</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="sI_carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#sI_carousel" data-slide-to="0" class="active"></li>
                <li data-target="#sI_carousel" data-slide-to="1"></li>
                <li data-target="#sI_carousel" data-slide-to="2"></li>
                <li data-target="#sI_carousel" data-slide-to="3"></li>
                <li data-target="#sI_carousel" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-item_img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-slider_1.png" class="d-block" alt="...">
                    </div>


                    <div class="carousel-caption">
                        <h1>Установка систем <span>видеонаблюдения</span> под ключ</h1>
                        <p>Мониторинг - основа безопасности</p>
                        <a href="#order" class="btn sI-btn">Узнать стоимость</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-item_img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-slider_2.png" class="d-block" alt="...">
                    </div>

                    <div class="carousel-caption">
                        <h1>Монтаж систем <span>охранно-пожарной</span> сигнализации</h1>
                        <p>Вывод на пульт охраны</p>
                        <a href="#order" class="btn sI-btn">Узнать стоимость</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-item_img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-slider_3.png" class="d-block" alt="...">
                    </div>

                    <div class="carousel-caption">
                        <h1>Монтаж систем <span>контроля доступа</span>  видеодомофонов</h1>
                        <p>IP - домофоны и карты доступа</p>
                        <a href="#order" class="btn sI-btn">Узнать стоимость</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-item_img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-slider_4.png" class="d-block" alt="...">
                    </div>

                    <div class="carousel-caption">
                        <h1>Установка <span>DVB T2 / спутникового</span> телевидения</h1>
                        <p>Триколор ТВ / НТВ+ / Интернет</p>
                        <a href="#order" class="btn sI-btn">Узнать стоимость</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-item_img">
                        <img src="<?php bloginfo( 'template_url' ); ?>/assets/images/1_sec-slider_5.png" class="d-block" alt="...">
                    </div>

                    <div class="carousel-caption">
                        <h1>Установка систем <span>усиления сотового</span> сигнала</h1>
                        <p>Любые операторы сотовых сетей</p>
                        <a href="#order" class="btn sI-btn">Узнать стоимость</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>





<!---->
<!--<div id="page" class="site">-->
<!--	<a class="skip-link screen-reader-text" href="#primary">--><?php //esc_html_e( 'Skip to content', 'specin' ); ?><!--</a>-->
<!---->
<!--	<header id="masthead" class="site-header">-->
<!--		<div class="site-branding">-->
<!--			--><?php
//			the_custom_logo();
//			if ( is_front_page() && is_home() ) :
//				?>
<!--				<h1 class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--				--><?php
//			else :
//				?>
<!--				<p class="site-title"><a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></p>-->
<!--				--><?php
//			endif;
//			$specin_description = get_bloginfo( 'description', 'display' );
//			if ( $specin_description || is_customize_preview() ) :
//				?>
<!--				<p class="site-description">--><?php //echo $specin_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?><!--</p>-->
<!--			--><?php //endif; ?>
<!--		</div><!-- .site-branding -->
<!---->
<!--		<nav id="site-navigation" class="main-navigation">-->
<!--			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">--><?php //esc_html_e( 'Primary Menu', 'specin' ); ?><!--</button>-->
<!--			--><?php
//			wp_nav_menu(
//				array(
//					'theme_location' => 'menu-1',
//					'menu_id'        => 'primary-menu',
//				)
//			);
//			?>
<!--		</nav><!-- #site-navigation -->
<!--	</header><!-- #masthead -->
