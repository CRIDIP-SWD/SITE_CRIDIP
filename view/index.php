<?php
/**
 * Created by PhpStorm.
 * User: SWD
 * Date: 04/01/2016
 * Time: 11:24
 */
?>
<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">

    <div class="swiper-container swiper-parent">
        <div class="swiper-wrapper">
            <div class="swiper-slide dark" style="background-image: url('<?= $constante->getUrl(array('images/'), true, false) ;?>slider/swiper/1.jpg');">
                <div class="container clearfix">
                    <div class="slider-caption slider-caption-center">
                        <h2 data-caption-animate="fadeInUp">BONNE ANNEE 2016</h2>
                        <p data-caption-animate="fadeInUp" data-caption-delay="200">Toute l'équipe de CRIDIP vous souhaite une bonne année 2016.</p>
                        <p data-caption-animate="fadeInUp" data-caption-delay="500">La ROADMAP 2016 est de sortie.</p>
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

<!-- Content
============================================= -->
<section id="content">

    <div class="content-wrap">
        <div class="promo promo-full promo-border header-stick bottommargin-lg">
            <div class="container clearfix">
                <h3>Appelez-nous aujourd'hui au <span>0899 492 648</span> <br>où écrivez-nous à <span>contact@cridip.com</span></h3>
                <span>Nous nous efforçons de forunir à nos clients tout notre soutien pour mener leurs projets à bien.</span>
                <a class="button button-reveal button-xlarge button-rounded tright" href="index.php?view=contact"><i class="icon-angle-right"></i><span>Contactez-nous</span></a>
            </div>
        </div>
        <div class="container clearfix bottommargin-lg">
            <div class="fancy-title title-dotted-border title-center">
                <h1>Découvrez toutes les <span>offres</span> et <span>services</span> fournis par CRIDIP</h1>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="index.php?view=event"><i class="icon-calendar2 i-alt"></i></a>
                        </div>
                        <h3>&Eacute;vénementiel</h3>
                        <p>Nous présentons pour vous et votre structure divers moyen de communications tels que de l’imprimerie, la création et la gestion de séminaire, support web, etc.…</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="index.php?view=conseil"><i class="icon-info i-alt"></i></a>
                        </div>
                        <h3>Conseil en entreprise</h3>
                        <p>SAS CRIDIP dispose de sa propre équipe d'expertise et vous accompagnera dans votre projet professionnel.</p>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="index.php?view=coaching"><i class="icon-switch i-alt"></i></a>
                        </div>
                        <h3>Coaching en entreprise</h3>
                        <p>Nous vous accompagnons également avec des coachs qui vous seront dédié afin que votre bien-être se reflete dans votre structure.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="feature-box fbox-effect">
                        <div class="fbox-icon">
                            <a href="index.php?view=conseil"><i class="icon-line2-globe i-alt"></i></a>
                        </div>
                        <h3>Développement</h3>
                        <p>SAS CRIDIP dispose de sa propre équipe d'expert en developpement Web, Réseau d'infrastructure et de Télécom afin de parfaire votre expérience du web.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
        <div class="promo promo-dark promo-full promo-uppercase bottommargin footer-stick">
            <div class="container clearfix">
                <h3>Appelez-nous aujourd'hui au <span>0899 492 648</span> <br>où écrivez-nous à <span>contact@cridip.com</span></h3>
                <span>Nous nous efforçons de forunir à nos clients tout notre soutien pour mener leurs projets à bien.</span>
                <a class="button button-reveal button-xlarge button-rounded tright" href="index.php?view=contact"><i class="icon-angle-right"></i><span>Contactez-nous</span></a>
            </div>
        </div>
    </div>

</section><!-- #content end -->

