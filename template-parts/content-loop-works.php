<div class="works-term-box">
    <a href="<?php the_permalink(); ?>">
        <div class="box-img">
            <?php if (has_post_thumbnail()) :
                the_post_thumbnail('archive');
            else : ?>
            <img src="<?php echo get_template_directory_uri(); ?>/imgs/no-image.jpg" alt="">
            <?php
            endif; 
            ?>
        </div>
        <p class="works-term-txt"><?php the_title(); ?></p>
    </a>
</div>