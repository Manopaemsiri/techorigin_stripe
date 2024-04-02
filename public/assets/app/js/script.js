$(function(){ 'use strict';

    // Section 02
    var section02 = $('.section-02');
    var changImage = $('#imgBg');
    var imgContent = [
        {
            logo: "1",
            imgBg: "background-image:url('./public/assets/app/img/content/04.jpg"
        },{
            logo: "2",
            imgBg: "background-image:url('./public/assets/app/img/content/02.jpg"
        },{
            logo: "3",
            imgBg: "background-image:url('./public/assets/app/img/content/03.jpg"
        },
    ]
 
    console.log(changImage);
    if(section02.length){
        section02.each(function(){
            var self = $(this);
            var swiper = new Swiper(self.find('.swiper-container'), {
                slidesPerView: 1,
                spaceBetween: 0,
                navigation: {
                    prevEl: self.find('.arrow.arrow-prev'),
                    nextEl: self.find('.arrow.arrow-next'),
                },
                autoplay: {
                    delay: 500,
                },
                pagination: {
                    el: self.find('.swiper-pagination'),
                    clickable: true,
                },
                loop: true,
                speed: 700,
                breakpoints: {
                    1300: { slidesPerView: 1 },
                    999: { slidesPerView: 1 },
                    768: { slidesPerView: 1 },
                    576: { slidesPerView: 1 },
                },
            });
            swiper.on('slideChange', function () {
                changImage.attr('style', imgContent[swiper.realIndex].imgBg);
                console.log('index', swiper.realIndex);
            });
        });
    }


    // Page Loader
    let pageLoader = $('.page-loader');
    let pageLoaderBg = $('.page-loader .bg');
    let pageLoaderSubBg = $('.page-loader .sub-bg');
    let pageLoaderLogo = $('.page-loader .logo');
    if(pageLoader.length){
        window.onload = function(){
            setTimeout(function(){
            pageLoader.addClass('started');
            setTimeout(function(){
                pageLoaderLogo.addClass('d-none');
                pageLoaderBg.css('opacity', '0');
                pageLoaderSubBg.css('transform', 'scale(5)')
            }, 600);
                setTimeout(function(){
                    pageLoader.remove();
                    $('body').removeClass('loading');
                    AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
                }, 1500);
            }, 0);
        }
    }else{
        $('body').removeClass('loading');
        // AOS Animation
        AOS.init({ easing: 'ease-in-out-cubic', duration: 750, once: true, offset: 10 });
    }
   
});