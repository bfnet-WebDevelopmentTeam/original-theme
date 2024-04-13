<?php get_header(); ?>
<?php get_template_part('template-parts/breadcrumbs'); ?>
<main>
    <div class="inner">
        <?php if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <?php get_template_part('template-parts/content-news'); ?>
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
</main>
<?php get_footer(); ?>