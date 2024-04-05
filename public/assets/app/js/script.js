$(function(){ 'use strict';

    // Section 02
    var section02 = $('.section-02'),
        title = section02.find('#title'),
        card = section02.find('.ss-card'),
        changeImage = card.find('.img-bg'),
        brandsLogo = card.find('.brand-logo') ,
        cardFilter = card.find('.filter-01'),
        client02 = section02.find('.client-02 .logo');
    var contents = [
        {
            id: "1",
            imgBg: "background-image:url('./public/assets/app/img/content/02.jpg",
            logo: "./public/assets/app/img/brands/bmw-white.svg",
            title: "Learn why BMW chose Stripe to power e-commerce and payments",
        },{
            id: "2",
            imgBg: "background-image:url('./public/assets/app/img/content/04.jpg",
            logo: "./public/assets/app/img/brands/amazon-white.svg",
            title: "See how Amazon simplified cross-border payments with Stripe",
        },{
            id: "3",
            imgBg: "background-image:url('./public/assets/app/img/content/03.jpg",
            logo: "./public/assets/app/img/brands/maersk-white.svg",
            title: "See how Maersk tapped into new technology to make it easier to ship around the world",
        },{
            id: "4",
            imgBg: "background-image:url('./public/assets/app/img/content/05.jpg",
            logo: "./public/assets/app/img/brands/twilio-white.svg",
            title: "See how Twilio increased authorization rates by 10% with Stripe",
        }
    ]
    if(section02.length){
        section02.each(function(){
            var self = $(this);
            var swiper = new Swiper(self.find('.swiper-container'), {
                spaceBetween: 30,
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
                loop:true,
                speed: 1200,
                breakpoints: {
                    1300: { slidesPerView: 1 },
                    999: { slidesPerView: 1 },
                    768: { slidesPerView: 1 },
                    576: { slidesPerView: 1 },
                },
            });
            swiper.on('slideChange', function () {
                let themes = `theme-0${contents[swiper.realIndex].id}`;

                if(card.hasClass('active')){
                    card.removeClass('active');
                }else{
                    setTimeout(function(){
                        card.addClass('active');
                    }, 100);
                }
                setTimeout(function(){
                    cardFilter.removeClass(`${themes}`);
                }, 2200);

                client02.removeClass("active");
                client02.eq(swiper.realIndex).addClass("active");
                cardFilter.addClass(`${themes}`);
                brandsLogo.attr('src', contents[swiper.realIndex].logo)
                changeImage.attr('style', contents[swiper.realIndex].imgBg);
                title.html(contents[swiper.realIndex].title);
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