<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage thanhgio
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="hfeed site">
            <header id="masthead" class="site-header" role="banner">
                <div id="menu-inner" class="navbar navbar-fixed-top">

                    <nav id="site-navigation"  role="navigation">
                        <div class="main-navigation-left">
                            <?php
                            $header_image = get_header_image();
                            if (!empty($header_image)) :
                                ?>
                                <div class="logo">
                                    <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url($header_image); ?>" class="header-image" alt="" /></a>
                                </div>
                            <?php endif; ?>

                            <?php wp_nav_menu(array('theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>

                            <div id="like-page">
                                <a target="_blank" href="https://facebook.com/suongquadi"><span class="fanpage-menu">Fanpage</span></a>

                                <div data-layout="button_count" data-href="https://facebook.com/suongquadi" class="fb-like fb_edge_widget_with_comment fb_iframe_widget" fb-xfbml-state="rendered"><span style="height: 20px; width: 79px;"><iframe scrolling="no" id="f3a2baf7162e1be" name="f364ad198ce8368" style="border: medium none; overflow: hidden; height: 20px; width: 79px;" title="Like this content on Facebook." class="fb_ltr" src="http://www.facebook.com/plugins/like.php?api_key=247460678730688&amp;channel_url=http%3A%2F%2Fstatic.ak.facebook.com%2Fconnect%2Fxd_arbiter.php%3Fversion%3D26%23cb%3Df34d6109b1bbf98%26domain%3Dsuong.vn%26origin%3Dhttp%253A%252F%252Fsuong.vn%252Ff3802b81ebf0da2%26relation%3Dparent.parent&amp;colorscheme=light&amp;extended_social_context=false&amp;href=https%3A%2F%2Ffacebook.com%2Fsuongquadi&amp;layout=button_count&amp;locale=en_US&amp;node_type=link&amp;sdk=joey&amp;show_faces=false&amp;width=90"></iframe></span></div>
                            </div>
                        </div>
                        <ul class="menu-right nav pull-right">
                            <li>
                                <a onclick="popup('https://id.vatgia.com/dang-nhap?ui.mode=popup&amp;_cont=http://suong.vn/sso/reload_frame.php&amp;service=suong&amp;localhost=http://suong.vn/sso/setsid.php')" href="javascript:;" class="" title="Đăng bài">
                                    <span class="cunach-icon cicon-menu">Đăng bài</span>
                                    Đăng bài
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" title="Đăng nhập" data-toggle="dropdown" class="dropdown-toggle" id="menu-login">Đăng nhập</a>
                                
                            </li>
                            <li>
                                <a onclick="popup('https://id.vatgia.com/dang-nhap?ui.mode=popup&amp;_cont=http://suong.vn/sso/reload_frame.php&amp;service=suong&amp;localhost=http://suong.vn/sso/setsid.php')" href="javascript:;" title="Đăng ký">Đăng ký</a>
                            </li>
                        </ul>
                    </nav><!-- #site-navigation -->


                </div>



            </header><!-- #masthead -->

            <div id="main" class="wrapper">