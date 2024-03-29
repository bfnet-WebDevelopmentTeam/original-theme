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
        <div class="container">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <?php the_content(); ?>
            <?php endwhile;
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>
