<?php get_header(); ?>
<div class="fv">
  <p>FVテキスト</p>
</div>
<?php get_template_part('templates/breadcrumbs'); ?>
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
        <a class="news-link" href="<?php echo esc_url(home_url('/news')); ?>">お知らせ一覧＞</a>
      </div>

    </div>
    <div class="container works-container">
      <h2 class="section-title">実績</h2>
      <div class="box works-tarm-box">
        <h3 class="section-sub-title works-tarm-title">WEB制作</h3>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <a class="works-tarm-link" href="works.html">WEB制作の実績ページへ</a>
      </div>
      <div class="box works-tarm-box">
        <h3 class="section-sub-title works-tarm-title">動画制作</h3>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>

        <a class="works-tarm-link" href="works.html">動画制作の実績ページへ</a>
      </div>
      <div class="box works-tarm-box">
        <h3 class="section-sub-title works-tarm-title">SNS運用</h3>

        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <div class="container works-tarm-container">
          <a href="single-works.html">
            <div class="img-box">
              <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
            </div>
            <div class="content-box">
              <h4>実績01</h4>
              <p>
                実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。実績の説明文。
              </p>
            </div>
          </a>
        </div>
        <a class="works-tarm-link" href="works.html">SNS運用の実績ページへ</a>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>