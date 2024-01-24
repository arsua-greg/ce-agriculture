<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <title><?php bloginfo('title'); ?></title>
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="<?php echo get_site_url(); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>">
    <meta property="og:site_name" content="">
    <meta property="og:description" content="" />
    <meta property="fb:app_id" content="">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>" />
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Noto+Sans+JP:wght@300;400&family=Noto+Serif+JP:wght@400;500;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <main>
        <div class="page__header">
            <header>
                <nav class="header">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/logo.png" alt="Logo"></a>
                    </div>
                    <ul class="pc-only link-list">
                        <li class="link-list__item"><a href="/#orchard">こもだ果樹園について</a></li>
                        <li class="link-list__item"><a href="/#circulation">自然循環栽培法</a></li>
                        <li class="link-list__item">
                            <a href="/#commitment">こだわり</a>
                            <div class="dropdown-item">
                                <a href="">SDGs</a>
                            </div>
                        </li>
                        <li class="link-list__item"><a href="/#attempt">取り組み</a></li>
                        <li class="link-list__item"><a href="/#products">商 品</a></li>
                    </ul>
                    <div class="header--hamburger" onclick="toggleMenu()">
                        <span></span>
                        <span></span>
                        <span></span>
                        <div class="nav-sp">
                            <nav class="header sp-only">
                                <ul class="link-list">
                                    <li class="link-list__item"><a href="/#orchard">こもだ果樹園について</a></li>
                                    <li class="link-list__item"><a href="/#circulation">自然循環栽培法</a></li>
                                    <li class="link-list__item"><a href="/#commitment">こだわり</a></li>
                                    <li class="link-list__item"><a href="/#attempt">取り組み</a></li>
                                    <li class="link-list__item"><a href="">SDGs</a></li>
                                    <li class="link-list__item"><a href="/#products">商 品</a></li>
                                    <li>
                                        <a class="c-btn" href="">
                                            <p>Online Shop</p>
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/arrow_link.svg" alt="Online Shop Button">
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </nav>
            </header>
        </div>