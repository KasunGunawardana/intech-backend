jQuery( document ).ready(function( $ ) {


	"use strict";

        // Page loading animation

        $("#preloader").animate({
            'opacity': '0'
        }, 600, function(){
            setTimeout(function(){
                $("#preloader").css("visibility", "hidden").fadeOut();
            }, 300);
        });
        

        // $(window).scroll(function() {
        //   var scroll = $(window).scrollTop();
        //   var box = $('.banner-full').height();
        //   var header = $('.header-full').height();

        //   if (scroll >= box - header) {
        //     $(".header-full").addClass("background-header");
        //   } else {
        //     $(".header-full").removeClass("background-header");
        //   }
        // });
});