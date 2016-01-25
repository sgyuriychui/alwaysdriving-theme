<?php get_header(); ?>

    <div class="container-fluid bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-7 col-md-8 col-lg-9">

                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <div class = 'post-single'>
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <a href="<?php the_permalink(); ?>">
                                <?php if(has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <!-- No featured image -->
                                <?php endif; ?>
                            </a>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="col-xs-12 col-sm-5 col-md-4 col-lg-3 sidebar banner-list">

                    <div class = "sidebar-widgets-sub text-center">
                        <?php if ( is_active_sidebar( 'sidebar_widget_area_1' ) ) : ?>
                            <?php dynamic_sidebar( 'sidebar_widget_area_1' ); ?>
                        <?php endif; ?>
                    </div>

                    <a href="#book_now_pop" class="fancybox">
                        <div class="media bg-carrot">
                            <div class="media-left media-middle">
                                <p class="media-object"><i class="fa fa-calendar"></i></p>
                            </div>
                            <div class="media-body media-middle">
                                <p class="media-heading">Book now</p>

                            </div>
                        </div>
                    </a>
                    <div style="display:none" class="fancybox-hidden">
                        <div id="book_now_pop"  class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="324" title="Book now"]'); ?>
                        </div>
                    </div>

                    <a href="#make_an_equiry_pop" class="fancybox">
                        <div class="media bg-carrot">
                            <div class="media-left media-middle">
                                <p class="media-object"><i class="fa fa-file-text-o fa-1x"></i></p>
                            </div>
                            <div class="media-body">
                                <p class="media-heading">Make <br /> <small>an Enquiry</small></p>

                            </div>
                        </div>
                    </a>
                    <div style="display:none" class="fancybox-hidden">
                        <div id="make_an_equiry_pop"  class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="428" title="Make an Enquiry"]'); ?>
                        </div>
                    </div>

                    <a>
                        <div class="media bg-carrot">
                            <div class="media-left media-middle">
                                <p class="media-object">
                    <span class="fa-stack">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-phone fa-stack-1x"></i>
                    </span>
                                </p>
                            </div>
                            <div class="media-body">
                                <p class="media-heading">Call us <br /> <div id ="sm">079 4470 3802</div> </p>

                            </div>
                        </div>
                    </a>
                    <div style="display:none" class="fancybox-hidden">
                        <div id="contact_form_pop" class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="325" title="Call back"]'); ?>
                        </div>
                    </div>

                    <a href="https://www.facebook.com/Always-Driving-796659497034722/" title="Like us">
                        <div class="media bg-carrot">
                            <div class="media-left media-middle">
                                <p class="media-object"><span class="fa-stack fa-lg fa-social-link">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-facebook fa-stack-1x"></i>
                </span></p>
                            </div>
                            <div class="media-body media-middle">
                                <p class="media-heading">Like Us</p>
                            </div>
                        </div>
                    </a>

                    <a href="https://twitter.com/AlwaysDriving1" title="Follow us">
                        <div class="media bg-carrot">
                            <div class="media-left media-middle">
                                <p class="media-object"><span class="fa-stack fa-lg fa-social-link">
                  <i class="fa fa-circle fa-stack-2x"></i>
                  <i class="fa fa-twitter fa-stack-1x"></i>
                </span></p>
                            </div>
                            <div class="media-body media-middle">
                                <p class="media-heading">Follow Us</p>
                            </div>
                        </div>
                    </a>


                </div>
            </div>










        </div>
    </div>


<?php get_footer(); ?>