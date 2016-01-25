<footer>

    <div class="container-fluid footer-logo">
        <div class="container">
            <a href="/" title="logo"><img src= <?= get_template_directory_uri() . "/images/logo-small.png" ?> class="img-responsive center-block" alt="logo" /></a>
        </div>
    </div>

    <div class="container">
        <div class="col-md-offset-2 col-md-8 text-center">

            <div class = "footer-widgets">
                <?php if ( is_active_sidebar( 'bottom_widget_area_1' ) ) : ?>
                    <div class="widget-header" role="complementary">
                        <?php dynamic_sidebar( 'bottom_widget_area_1' ); ?>
                    </div>
                <?php endif; ?>
            </div>

            <h3>Stay connected</h3>

            <a href="https://www.facebook.com/Always-Driving-796659497034722/" title="facebook" class="social-link"><span class="fa-stack fa-lg fa-social-link">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-facebook fa-stack-1x"></i>
            </span></a>

            <a href="https://twitter.com/AlwaysDriving1" title="twitter" class="social-link"><span class="fa-stack fa-lg fa-social-link">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-twitter fa-stack-1x"></i>
            </span></a>





        </div>
    </div>

</footer>



<?php wp_footer(); ?>

</body>
</html>