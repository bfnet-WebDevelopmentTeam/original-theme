<?php get_header(); ?>
<div class="fv">
  <p>実績</p>
</div>
<?php get_template_part('template-parts/breadcrumbs'); ?>

<main>
    <div class="inner">
        <div class="container news-container">
            <h2 class="section-title"><?php echo get_the_archive_title(); ?></h2>
            <?php if (have_posts()) : ?>
                <div class="box news-box">
                    <?php while (have_posts()) : the_post();
                    ?>
                        <?php get_template_part('template-parts/content-archive'); ?>
                    <?php endwhile; ?>
                </div>
              <?php get_template_part('template-parts/page-navi'); ?>
            <?php endif; ?>
        </div>
    </div>
</main>
<?php get_footer(); ?>