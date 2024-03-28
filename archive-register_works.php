<?php get_header(); ?>
<?php get_template_part("template-parts/breadcrumbs"); ?>
<div class="fv">
  <p>実績</p>
</div>
<main>
  <div class="inner">
    <div class="container works-container">
      <h2 class="section-title">実績</h2>
      <?php
      $works_cat = get_terms(array('taxonomy' => 'works_cat'));
      if (!empty($works_cat)) : ?>
        <?php foreach ($works_cat as $cat) : ?>
          <div class="container works-term-container">
            <h3 class="works-term-heading"><?php echo $cat->name; ?></h3>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_93913736_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_61303825_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/web01.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_74833875_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <a class="works-term-link" href="works-term-archive-term-archive.html">実績分類01の一覧ページへ</a>
          </div>
          <div class="container works-term-container">
            <h3 class="works-term-heading">実績分類02</h3>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_91941047_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_84366447_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_74833875_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_74833875_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <a class="works-term-link" href="works-term-archive.html">実績分類02の一覧ページへ</a>
          </div>
          <div class="container works-term-container">
            <h3 class="works-term-heading">実績分類03</h3>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_78357634_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_42940200_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_73138703_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <div class="works-term-box">
              <a href="single-works.html">
                <div class="box-img">
                  <img src="imgs/pixta_74833875_M.jpg" alt="">
                </div>
                <p class="works-term-txt">テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。テキスト。</p>
              </a>
            </div>
            <a class="works-term-link" href="works-term-archive.html">実績分類03の一覧ページへ</a>
          </div>
        <?php endforeach; ?>
      <?php endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>