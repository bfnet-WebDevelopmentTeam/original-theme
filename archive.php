<?php get_header(); ?>
<?php get_template_part('templates/breadcrumbs'); ?>

<main>
    <div class="inner">
        <div class="container news-container">
            <h2 class="section-title"><?php echo get_the_archive_title(); ?></h2>
            <div class="box news-box">
                <?php if (have_posts()) :
                    while (have_posts()) : the_post();
                ?>
                        <?php get_template_part('templates/content-archive'); ?>
                <?php endwhile;
                endif; ?>
            </div>
            <div class="wp-pagenavi" role="navigation">
                <span aria-current="page" class="current">1</span>
                <a class="page larger" title="ページ 2" href="#">2</a>
                <a class="page larger" title="ページ 3" href="#">3</a>
                <a class="page larger" title="ページ 4" href="#">4</a>
                <a class="page larger" title="ページ 5" href="#">5</a>
                <span class="extend">...</span>
                <a class="larger page" title="ページ 10" href="#">10</a>
                <span class="extend">...</span>
                <a class="nextpostslink" rel="next" aria-label="次のページ" href="#">»</a>
                <a class="last" aria-label="Last Page" href="#">最後 »</a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>