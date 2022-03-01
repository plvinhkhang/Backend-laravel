(function($) {
  "use strict";

  jQuery(document).ready(function(){


    $(window).on('load', function() {
      $('#preloader_active').fadeOut('slow');
    });


    /*-- Variables --*/
    var windows = $(window);
    var screenSize = windows.width();



    /*-- Product Hover Function --*/
    $(window).on('load', function(){
      function productHover() {

        var productInner = $('.product-inner');
        var proImageHeight = productInner.find('img').outerHeight();

        productInner.hover(
          function() {
            var porContentHeight = $( this ).find('.content').innerHeight()-55;
            $( this ).find('.image-overlay').css({
              "height": proImageHeight - porContentHeight,
            });
          }, function() {
            $( this ).find('.image-overlay').css({
              "height": '100%',
            });
          }
        );

      }
      productHover();
      windows.resize(productHover);
    });


    /*--
    Menu Sticky
-----------------------------------*/
    var sticky = $('.header-sticky');

    windows.on('scroll', function() {
      var scroll = windows.scrollTop();
      if (scroll < 300) {
        sticky.removeClass('is-sticky');
      }else{
        sticky.addClass('is-sticky');
      }
    });

    /*--
    Mobile Menu
------------------------*/
    

    /*--
    Header Search
------------------------*/
    var searchToggle = $('.search-toggle');
    var searchWrap = $('.header-search-wrap');

    searchToggle.on('click', function(){

      if( !$(this).hasClass('active') ) {
        $(this).addClass('active');
        searchWrap.addClass('active');
      } else {
        $(this).removeClass('active');
        searchWrap.removeClass('active');
      }

    });
    /*--
    Header Cart
------------------------*/
    var headerCart = $('.header-cart');
    var closeCart = $('.close-cart, .cart-overlay');
    var miniCartWrap = $('.mini-cart-wrap');

    headerCart.on('click', function(e){
      e.preventDefault();
      $('.cart-overlay').addClass('visible');
      miniCartWrap.addClass('open');
    });
    closeCart.on('click', function(e){
      e.preventDefault();
      $('.cart-overlay').removeClass('visible');
      miniCartWrap.removeClass('open');
    });



    /*----- 
	Testimonial Slider
--------------------------------*/
    
    /*--
	Brand Slider
-----------------------------------*/
   
    /*--
	Product Slider
-----------------------------------*/
    
    /*----- 
	Product Zoom
--------------------------------*/
    // Instantiate EasyZoom instances
   

    /*--
	Count Down Timer
------------------------*/
   
    /*--
	MailChimp
-----------------------------------*/
   

    /*--
    Scroll Up
-----------------------------------*/
   

    /*--
    Nice Select
------------------------*/
    

    /*--
	Price Range Slider
------------------------*/
    
    /*----- 
	Quantity
--------------------------------*/
    $('.qtybtn').on('click', function() {
      var $button = $(this);
      var oldValue = $button.parent().find('input').val();
      if ($button.hasClass('inc')) {
        var newVal = parseFloat(oldValue) + 1;
      } else {
        // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }
      $button.parent().find('input').val(newVal);
    });  

    /*----- 
	Shipping Form Toggle
--------------------------------*/ 
    $('[data-shipping]').on('click', function(){
      if( $('[data-shipping]:checked').length > 0 ) {
        $('#shipping-form').slideDown();
      } else {
        $('#shipping-form').slideUp();
      }
    })

    /*----- 
	Payment Method Select
--------------------------------*/
    $('[name="payment-method"]').on('click', function(){

      var $value = $(this).attr('value');

      $('.single-method p').slideUp();
      $('[data-method="'+$value+'"]').slideDown();

    })


    // Remove href
    $(".remove_href").removeAttr("href");

    $('.prod_price span:first-child').addClass('price');
    $('.prod_price span:nth-child(2)').addClass('old');


    /* Ajax Wishlist */
    $(".action--wishlist").on('click', function(){
      $(this).addClass("loading-wishlist");
      setTimeout(function () {
        $(".action--wishlist").removeClass("loading-wishlist");
      },1500);
    });




    //grid-color-swatch
    $('.grid-color-swatch li label').hover(function(){
      var variantImage = jQuery(this).parent().find('.hidden a').attr('href');
      jQuery(this).parents('.product_wrapper').find('.image > img').attr({ src: variantImage }); 
      return false;
    });


  });

})(jQuery);



