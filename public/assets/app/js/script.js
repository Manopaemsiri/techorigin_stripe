$(function(){ 'use strict';

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