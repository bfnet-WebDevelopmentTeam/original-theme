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
            'post_per_page' => 3,
          )
        );
        if ($args->have_posts()) :
          while ($args->have_posts()) : $args->the_post(); ?>
            <ul>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y-m-d'); ?></time>
                  <div class="news-box-content">
                    <p class="news-title"><?php the_title(); ?></p>
                    <p class="news-text">
                      <?php the_excerpt(); ?>
                    </p>
                  </div>
                </a>
              </li>
            </ul>
        <?php
          endwhile;
        endif;
        wp_reset_postdata();
        ?>
        <a class="news-link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ一覧へ</a>
      </div>
    </div>
    <div class="container works-container">
      <?php
      $works_obj = get_page_by_path('works');
      $post = $works_obj;
      setup_postdata($post);
      $works_title = get_the_title();
      ?>
      <h2 class="section-title"><?php the_title(); ?></h2>
      <?php wp_reset_postdata(); ?>
      <div class="box works-term-box">
        <?php
        $works_pages = get_child_pages(-1, $works_obj->ID);
        if ($works_pages->have_posts()) :
          while ($works_pages->have_posts()) : $works_pages->the_post();
        ?>
        <?php get_template_part('template-parts/content-works-common'); ?>
        <?php endwhile;
        endif;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>