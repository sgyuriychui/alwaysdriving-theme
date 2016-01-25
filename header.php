<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alawys Driving l Cheap driving lessons in London from &pound;9.99</title>
    <?php wp_head(); ?>
</head>
<body>

<header>
    <div class="container-fluid bg-white">
        <div class="container">

            <a href="/" title="logo"><img src= <?= get_template_directory_uri() . "/images/logo.png" ?> class="img-responsive center-block" id="logo" alt="logo" /></a>

            <nav class="navbar navbar-default">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu-main" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="menu-main">

                    <div class = "header-widgets">
                        <?php if ( is_active_sidebar( 'top_widget_area_1' ) ) : ?>
                            <div class="widget-header" role="complementary">
                                <?php dynamic_sidebar( 'top_widget_area_1' ); ?>
                            </div>
                        <?php endif; ?>
                    </div>


                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header_navigation', // menu slug from step 1
                        'container' => false, // 'div' container will not be added
                        'menu_class' => 'nav navbar-nav', // <ul class="nav">
                        'fallback_cb' => 'default_header_nav', // name of default function from step 2
                    ));
                    ?>



                </div><!-- /.navbar-collapse -->

            </nav>

        </div>
    </div>
</header>