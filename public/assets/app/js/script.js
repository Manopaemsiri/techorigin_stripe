$(function(){ 'use strict';

    // Section 02
    var section02 = $('.section-02'),
        client02 = section02.find('.client-02 .logo');
    if(section02.length){
        section02.each(function(){
            var self = $(this);
            let swiperContainer = self.find('.swiper-container');
            let startIndex = 1;

            let swiperTitle = section02.find('.swiper-title');
            let titles = swiperContainer.find('.swiper-slide').map(function(){
                return $(this).data('title')
            });
            swiperTitle.html(titles[startIndex]);

            let swiperImage = section02.find('.swiper-image');
            let images = swiperContainer.find('.swiper-slide').map(function(){
                return $(this).data('image');
            });
            swiperImage.html(images[startIndex]);

            let swiperLogo = section02.find('.swiper-logo');
            let logos = swiperContainer.find('.swiper-slide').map(function(){
                return $(this).data('logo');
            });
            swiperLogo.html(logos[startIndex]);

            let swiperBgColor = section02.find('.swiper-filter');
            let filters = swiperContainer.find('.swiper-slide').map(function(){
                return $(this).data('filter');
            });
            swiperBgColor.addClass(filters[startIndex]);

            var swiper = new Swiper(self.find('.swiper-container'), {
                spaceBetween: 30,
                navigation: {
                    prevEl: self.find('.arrow.arrow-prev'),
                    nextEl: self.find('.arrow.arrow-next'),
                },
                autoplay: {
                    delay: 0,
                },
                pagination: {
                    el: self.find('.swiper-pagination'),
                    clickable: true,
                },
                // loop:true,
                speed: 1300,
                initialSlide: startIndex,
                breakpoints: {
                    1300: { slidesPerView: 1 },
                    999: { slidesPerView: 1 },
                    768: { slidesPerView: 1 },
                    576: { slidesPerView: 1 },
                },
            });
            swiper.on('slideChange', function () {
                swiperTitle.html(titles[swiper.activeIndex]);
                swiperImage.html(`<div class="img-bg" style="background-image:url('${images[swiper.activeIndex]}')"></div>`);
                swiperLogo.html(`<img class="brand-logo" src="${logos[swiper.activeIndex]}" alt="Logo">`);
                swiperBgColor.addClass(`${filters[swiper.activeIndex]}`)

                if(swiperBgColor.hasClass(`${filters[swiper.activeIndex]}`)){
                    setTimeout(function(){
                        swiperBgColor.removeClass(`${filters[swiper.activeIndex]}`)
                    }, 1300);
                   
                }
                client02.removeClass("active");
                client02.eq(swiper.realIndex).addClass("active");
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