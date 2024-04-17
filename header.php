<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <button id="hamburger">
                <span id="btn-line"></span>
            </button>
        </div>
    </header>
    <?php if (is_front_page() || is_archive()) : ?>
        <div class="fv">
            <?php if (is_front_page()) : ?>
                <p>FVテキスト</p>
            <?php endif; ?>
            <?php if (is_archive()) : ?>
                <p><?php echo get_the_archive_title(); ?></p>
            <?php endif; ?>
        </div>
    <?php endif; ?>
    <?php get_template_part('template-parts/breadcrumbs'); ?>