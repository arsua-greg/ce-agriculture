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
            <header class="pc-only">
                <nav class="header">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/logo.png" alt="Logo"></a>
                    </div>
                    <ul class="link-list">
                        <li class="link-list__item"><a href="">こもだ果樹園について</a></li>
                        <li class="link-list__item"><a href="">自然循環栽培法</a></li>
                        <li class="link-list__item"><a href="">こだわり</a></li>
                        <!-- <span>
                            <li class="link-list__item"><a href="">SDGs</a></li>
                        </span> -->
                        <li class="link-list__item"><a href="">取り組み</a></li>
                        <li class="link-list__item"><a href="">商 品</a></li>
                    </ul>
                </nav>
            </header>
            <header class="sp-only">
                <div class="page__header--hamburger">
                    <span></span>
                    <span></span>
                </div>
                <nav>
                    <ul>
                        <li>こもだ果樹園について</li>
                        <li>自然循環栽培法</li>
                        <li>こだわり</li>
                        <li>取り組み</li>
                        <li>SDGs</li>
                        <li>商 品</li>
                        <a href="">
                            <p>Online Shop</p>
                            <img src="" alt="Online Shop Button">
                        </a>
                    </ul>
                </nav>
            </header>
        </div>