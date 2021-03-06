<!-- Page Title-->
<section id="page-title" class="page-title-dark">

    <div class="container clearfix">
        <h1>DEVELOPPEMENT</h1>
        <ol class="breadcrumb">
            <li><a href="#">SAS CRIDIP</a></li>
            <li class="active">Developpement</li>
        </ol>
    </div>

</section>
<!-- #page-title end -->

<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('<?= $constante->getUrl(array(''), false, true) ;?>background/world.jpg');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-right">
                        <h2 data-caption-animate="fadeInUp">World Map SUBMIT</h2>
                        <p data-caption-animate="fadeInDown" data-caption-delay="200">TEXT 1</p>
                        <p data-caption-animate="fadeInUp" data-caption-delay="500">Text 2</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
        <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
    </div>

    <script>
        jQuery(document).ready(function($){
            var swiperSlider = new Swiper('.swiper-parent',{
                paginationClickable: false,
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
                onSwiperCreated: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeStart: function(swiper){
                    $('[data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                        $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                    });
                    SEMICOLON.slider.swiperSliderMenu();
                },
                onSlideChangeEnd: function(swiper){
                    $('#slider').find('.swiper-slide').each(function(){
                        if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                        if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
                    });
                    $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                        if($(this).find('video').length > 0) {
                            if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                        }
                        if($(this).find('.yt-bg-player').length > 0) {
                            $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                        }
                    });
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }
                    if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP(); }

                    $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                        var $toAnimateElement = $(this);
                        var toAnimateDelay = $(this).attr('data-caption-delay');
                        var toAnimateDelayTime = 0;
                        if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                        if( !$toAnimateElement.hasClass('animated') ) {
                            $toAnimateElement.addClass('not-animated');
                            var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                            setTimeout(function() {
                                $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                            }, toAnimateDelayTime);
                        }
                    });
                }
            });

            $('#slider-arrow-left').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipePrev();
            });

            $('#slider-arrow-right').on('click', function(e){
                e.preventDefault();
                swiperSlider.swipeNext();
            });
        });
    </script>

    <a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

</section>

<!-- Content-->
<section id="content">

    <div class="content-wrap">
        <div class="promo promo-full promo-border header-stick bottommargin-lg">
            <div class="container clearfix">
                <h3>Appelez-nous aujourd'hui au <span>0899 492 648</span> <br>où écrivez-nous à <span>contact@cridip.com</span></h3>
                <span>Nous nous efforçons de forunir à nos clients tout notre soutien pour mener leurs projets à bien.</span>
                <a class="button button-reveal button-xlarge button-rounded tright" href="index.php?view=contact"><i class="icon-angle-right"></i><span>Contactez-nous</span></a>
            </div>
        </div>
        <div class="container clearfix bottommargin-lg topmargin">
            <div class="fancy-title title-dotted-border title-center">
                <h1>Découvrez toutes les <span>offres</span> dans le <span>Développement</span></h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="http://swd.cridip.com/"><i class="icon-line2-globe i-alt"></i></a>
                        </div>
                        <h3>Web</h3>
                        <p>Nous réalisons des sites Web d'exceptions, de manières professionnelles et totalement responsive.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="http://swd.cridip.com/"><i class="icon-link i-alt"></i></a>
                        </div>
                        <h3>Réseau</h3>
                        <p>Grace à notre expertise réseau et infrastructure et ce avec notre partenaire qui est numéro 1 européen dans l'hebergement et la gestion d'infrastructure réseau, nous vous offrons une qualité de réalisations de votre réseau hors norme et auto-gérer.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="http://swd.cridip.com/"><i class="icon-circle-arrow-right i-alt"></i></a>
                        </div>
                        <h3>Support Web</h3>
                        <p>SAS CRIDIP réalise pour vous, des sites web d'exception pour parfaire votre communications.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="promo promo-dark promo-full promo-uppercase bottommargin footer-stick">
            <div class="container clearfix">
                <h3>Appelez-nous aujourd'hui au <span>0899 492 648</span> <br>où écrivez-nous à <span>contact@cridip.com</span></h3>
                <span>Nous nous efforçons de forunir à nos clients tout notre soutien pour mener leurs projets à bien.</span>
                <a class="button button-reveal button-xlarge button-rounded tright" href="index.php?view=contact"><i class="icon-angle-right"></i><span>Contactez-nous</span></a>
            </div>
        </div>
    </div>

</section>
<!-- #content end -->

