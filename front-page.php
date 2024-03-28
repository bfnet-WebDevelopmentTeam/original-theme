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
        $args = new Wp_Query(
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

        <div class="container works-term-container">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
          </div>
          <div class="content-box">
            <h3><?php echo $cat->name; ?>WEB制作</h3>
            <p>
              実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
            </p>
            <a class="works-term-link" href="works.html">WEB制作の実績ページへ</a>
          </div>
        </div>
        <div class="container works-term-container">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
          </div>
          <div class="content-box">
            <h3>動画制作</h3>
            <p>
              実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
            </p>
            <a class="works-term-link" href="works.html">動画制作の実績ページへ</a>
          </div>
        </div>
        <div class="container works-term-container">
          <div class="img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
          </div>
          <div class="content-box">
            <h3>SNS運用</h3>
            <p>
              実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
            </p>
            <a class="works-term-link" href="works.html">SNS運用の実績ページへ</a>
          </div>
        </div>

      </div>
    </div>
  </div>
</main>
<?php get_footer(); ?>