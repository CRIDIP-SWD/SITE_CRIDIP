<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array(''), true, false) ;?>style.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>dark.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>font-icons.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>animate.css" type="text/css" />
    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="<?= $constante->getUrl(array('css/'), true, false) ;?>responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- External JavaScripts
    ============================================= -->
    <script type="text/javascript" src="<?= $constante->getUrl(array('js/'), true, false) ;?>jquery.js"></script>
    <script type="text/javascript" src="<?= $constante->getUrl(array('js/'), true, false) ;?>plugins.js"></script>

    <!-- Document Title
    ============================================= -->
    <title>Canvas | The Multi-Purpose HTML5 Template</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.php?view=index" class="standard-logo" data-dark-logo="<?= $constante->getUrl(array('images/'), true, false) ;?>logo-dark.png"><img src="<?= $constante->getUrl(array('images/'), true, false) ;?>logo.png" alt="Canvas Logo"></a>
                    <a href="index.php?view=index" class="retina-logo" data-dark-logo="<?= $constante->getUrl(array('images/'), true, false) ;?>logo-dark@2x.png"><img src="<?= $constante->getUrl(array('images//'), true, false) ;?>logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu" class="dark">

                    <ul>
                        <li class="current"><a href="index.php?view=index"><div>Accueil</div></a></li>
                        <li><a href="index.php?view=event"><div>Evènementiel</div></a></li>
                        <li><a href="index.php?view=conseil"><div>Conseil</div></a></li>
                        <li><a href="index.php?view=coach"><div>Coaching</div></a></li>
                        <li><a href="index.php?view=dev"><div>Developpement</div></a></li>
                        <li><a href="index.php?view=contact"><div>Contact</div></a></li>
                    </ul>

                    <!-- Top Cart
                    ============================================= -->
                    <!--<div id="top-cart">
                        <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
                        <div class="top-cart-content">
                            <div class="top-cart-title">
                                <h4>Shopping Cart</h4>
                            </div>
                            <div class="top-cart-items">
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Blue Round-Neck Tshirt</a>
                                        <span class="top-cart-item-price">$19.99</span>
                                        <span class="top-cart-item-quantity">x 2</span>
                                    </div>
                                </div>
                                <div class="top-cart-item clearfix">
                                    <div class="top-cart-item-image">
                                        <a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>
                                    </div>
                                    <div class="top-cart-item-desc">
                                        <a href="#">Light Blue Denim Dress</a>
                                        <span class="top-cart-item-price">$24.99</span>
                                        <span class="top-cart-item-quantity">x 3</span>
                                    </div>
                                </div>
                            </div>
                            <div class="top-cart-action clearfix">
                                <span class="fleft top-checkout-price">$114.95</span>
                                <button class="button button-3d button-small nomargin fright">View Cart</button>
                            </div>
                        </div>
                    </div>--><!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                    <!--<div id="top-search">
                        <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
                        <form action="search.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
                        </form>
                    </div>--><!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->

    <?= $content; ?>
    <!-- Footer
		============================================= -->
    <footer id="footer" class="dark" style="background: url('<?= $constante->getUrl(array('images/'), true, false) ;?>footer-bg.jpg') repeat; background-size: cover;">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="widget clearfix">

                        <img src="images/footer-widget-logo.png" alt="" class="alignleft" style="margin-top: 8px; padding-right: 18px; border-right: 1px solid #4A4A4A;">

                        <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards with a Retina &amp; Responsive Approach. Browse the amazing Features this template offers.</p>

                        <div class="line" style="margin: 30px 0;"></div>

                        <div class="row">

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">About</a></li>
                                    <li><a href="#">FAQs</a></li>
                                    <li><a href="#">Support</a></li>
                                    <li><a href="#">Contact</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Shop</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Events</a></li>
                                    <li><a href="#">Forums</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Corporate</a></li>
                                    <li><a href="#">Agency</a></li>
                                    <li><a href="#">eCommerce</a></li>
                                    <li><a href="#">Personal</a></li>
                                    <li><a href="#">One Page</a></li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-xs-6 bottommargin-sm widget_links">
                                <ul>
                                    <li><a href="#">Restaurant</a></li>
                                    <li><a href="#">Wedding</a></li>
                                    <li><a href="#">App Showcase</a></li>
                                    <li><a href="#">Magazine</a></li>
                                    <li><a href="#">Landing Page</a></li>
                                </ul>
                            </div>

                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small" style="color: #35BBAA;"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small" style="color: #2CAACA;"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div id="widget-subscribe-form-result" data-notify-type="success" data-notify-msg=""></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
									<span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                        <script type="text/javascript">
                            $("#widget-subscribe-form").validate({
                                submitHandler: function(form) {
                                    $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                    $(form).ajaxSubmit({
                                        target: '#widget-subscribe-form-result',
                                        success: function() {
                                            $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                            $('#widget-subscribe-form').find('.form-control').val('');
                                            $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                            SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                        }
                                    });
                                }
                            });
                        </script>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    <div class="copyrights-menu copyright-links clearfix">
                        <a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
                    </div>
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless nobottommargin si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="<?= $constante->getUrl(array('js/'), true, false) ;?>functions.js"></script>

</body>
</html>