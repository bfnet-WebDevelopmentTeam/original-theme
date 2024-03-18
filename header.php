<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <div class="inner header-inner">
            <h1>WP_テスト用サイト</h1>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'place_global',
                    'menu_id' => 'header-nav',
                    'container' => false,
                )
            );
            ?>
            <!-- <ul id="header-nav" class="menu">
                <li class="menu-item"><a href="#">トップ</a></li>
                <li class="menu-item"><a href="news.html">お知らせ</a></li>
                <li class="menu-item"><a href="works.html">実績</a></li>
                <li class="menu-item"><a href="contact.html">お問い合わせ</a></li>
            </ul> -->
            <button id="hamburger">
                <span id="btn-line"></span>
            </button>
        </div>
    </header>