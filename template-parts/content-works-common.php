<div class="container works-term-container">
              <div class="img-box">
                <img src="<?php echo get_template_directory_uri(); ?>/imgs/web01.jpg" />
              </div>
              <div class="content-box">
                <h3><?php the_title(); ?></h3>
                <p>
                  <?php the_content(); ?>
                </p>
                <a class="works-term-link" href="<?php the_permalink(); ?>"><?php the_title(); ?>の実績ページへ</a>
              </div>
            </div>