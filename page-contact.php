<?php get_header(); ?>
<main>
    <div class="inner">
        <div class="container">
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
            ?>
                    <h2 class="section-title">お問い合わせ</h2>
                    <div class="contact-form">
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>