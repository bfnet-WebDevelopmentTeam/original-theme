<footer>
    <div class="inner footer-inner">
        <p class="footer-title"><a href="index.html">WP_テストサイト</a></p>
        <?php wp_nav_menu(
            array(
                'theme_location' => 'place_footer',
                'content' => false,
            )
        );
        ?>
        <p class="copyright">©WP_テストサイト</p>
    </div>
</footer>
</body>
<?php wp_footer(); ?>

</html>