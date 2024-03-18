<?php get_header(); ?>
<div class="breadcrumbs">
    <div class="inner">
        <span><a href="index.html">トップ</a></span>
        <span><span class="arrow">></span><a href="news.html">お知らせ</a></span>
        <span><span class="arrow">></span><a href="works.html">実績</a></span>
        <span><span class="arrow">></span><a href="contact.html">お問い合わせ</a></span>
    </div>
</div>
<main>
    <div class="inner">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
              <?php get_template_part('templates/content-single'); ?>
        <?php endwhile;
        endif;
        ?>
    </div>
    <div class="sns-area">
        <div class="twitter-area">
            <a href="#"><i class="fa-brands fa-square-twitter fa-2x fa-fw"></i></a>
        </div>
        <div class="instagram-area">
            <a href="#"><i class="fa-brands fa-square-instagram fa-2x fa-fw"></i></a>
        </div>
    </div>
    </div>
</main>
<?php get_footer(); ?>