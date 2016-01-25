<?php get_header(); ?>

    <div class="container-fluid bg-white">
        <div class="container">

            <div class="row block-banner-top">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="learn-to-drive" title="Learn to Drive Today"><img src=<?=get_template_directory_uri()."/images/banner-ok.jpg"?> alt=""><p class="position-bottom position-left">Learn to Drive Today</p></a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="lessons" title="Introduction Deals"><img src=<?=get_template_directory_uri()."/images/banner-car.jpg"?> alt=""><p class="position-bottom position-left">Introduction Deals</p></a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                    <a href="become-a-driver-instructor" title="Become a driver instructor"><img src=<?=get_template_directory_uri()."/images/banner-drive.jpg"?> alt=""><p class="position-bottom position-left">Become a driver instructor</p></a>
                </div>
            </div><!-- /.row .block-banner -->

            <div class="row banner-list">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
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
                        <div id="book_now_pop" class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="324" title="Book now"]'); ?>
                        </div>
                    </div>
                </div>
								
								<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
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
                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
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
                                <p class="media-heading">Call us <br /> <img src=<?=get_template_directory_uri()."/images/number.png"?> alt="" width="90%"> <!--<small>079 4470 3802</small>--></p>

                            </div>
                        </div>
                    </a>
                    <div style="display:none" class="fancybox-hidden">
                        <div class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="57" title="Call back"]'); ?>
                        </div>
                    </div>
                </div>



                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="#contact_form_pop" class="fancybox">
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
                                <p class="media-heading">Request <br /> <small>a call back</small></p>

                            </div>
                        </div>
                    </a>
                    <div style="display:none" class="fancybox-hidden">
                        <div id="contact_form_pop"  class="text-center">
                            <?php echo do_shortcode('[contact-form-7 id="57" title="Call back"]'); ?>
                        </div>
                    </div>
                </div>
            </div><!-- / test row -->




            <div class="row block-banner">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="/pass-plus" title="Pass first time!"><img src=<?=get_template_directory_uri()."/images/banner6.jpg"?> alt=""></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="/driving-test" title="Let's drive!"><img src=<?=get_template_directory_uri()."/images/banner2.jpg"?> alt=""></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="/test-qa" title="We are very reliable"><img src=<?=get_template_directory_uri()."/images/banner3.jpg"?> alt=""></a>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <a href="/testimonial" title="Easy first steps"><img src=<?=get_template_directory_uri()."/images/banner4.jpg"?> alt=""></a>
                </div>
            </div><!-- /.row .block-banner -->








        </div>
    </div>



    <!-- Modal -->
    <div class="modal fade" id="book-now">
        <div class="modal-dialog">
            <div class="modal-content">



                <form class="form-drive text-center">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h3 class="modal-title">Book now</h3>
                    </div>
                    <div class="modal-body">
                        <p>Enter your personal info</p>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputName" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" id="inputPhone" placeholder="Phone number">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputAdress" placeholder="Full adress">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputPostCode" placeholder="Post code">
                        </div>
                        <div class="form-group">
                            <select class="form-control" id="inputCarType">
                                <option> - car type - </option>
                                <option>manual</option>
                                <option>auto</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-carrot center-block">Thank you &amp; submit</button>
                    </div>
                </form>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

<?php get_footer(); ?>