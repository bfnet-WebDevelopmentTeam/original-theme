<?php get_header(); ?>
<div class="fv">
  <p>FVテキスト</p>
</div>
<?php get_template_part('template-parts/breadcrumbs'); ?>
<main>
  <div class="inner">
    <div class="container news-container">
      <h2 class="section-title">お知らせ</h2>
      <div class="box news-box">
        <?php
        $args = new WP_Query(
          array(
            'post_type' => 'news',
            'posts_per_page' => 3,
          )
        );

        if ($args->have_posts()) :
          while ($args->have_posts()) : $args->the_post();
            get_template_part('template-parts/content-loop-news');
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <a class="news-link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ一覧へ</a>
      </div>
    </div>
    <div class="container works-container">
      <h2 class="section-title">実績</h2>
      <div class="box works-term-box">
        <?php
        $terms = get_terms(array('taxonomy' => 'works_cat', 'include' => "web-production", "video-production", "sns", 'parent' => 0, 'orderby' => 'slug', 'order' => 'DESC'));
        foreach ($terms as $term) :
          include 'template-parts/content-works-term.php';
        endforeach;
        ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>