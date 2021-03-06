// Карусель в услуг
$('.carousel').carousel();

// Карусель продуктов
$('#product-hit-sales').carousel();

// Карусель продуктов
$('#product-list').carousel();

// Плагин для картинок
;( function( $ ) {
  $( '.swipebox' ).swipebox({
    useCSS : true, // false will force the use of jQuery for animations
    useSVG : true, // false to force the use of png for buttons
    initialIndexOnArray : 0, // which image index to init when a array is passed
    hideCloseButtonOnMobile : false, // true will hide the close button on mobile devices
    removeBarsOnMobile : true, // false will show top bar on mobile devices
    hideBarsDelay : 3000, // delay before hiding bars on desktop
    videoMaxWidth : 1140, // videos max width
    beforeOpen: function() {}, // called before opening
    afterOpen: null, // called after opening
    afterClose: function() {}, // called after closing
    loopAtEnd: false // true will return to the first image after the last image is reached
  });

} )( jQuery );

// Карусль slick
$(document).ready(function() {
  $('.autoplay-slick-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000
  });

  // Fixed main menu
  var jq_window = $(window);
  jq_window.scroll(function()
  {
    if(jq_window.scrollTop() > 0)
      $('.js-main-menu').addClass('fixed-main-menu');
    else
      $('.js-main-menu').removeClass('fixed-main-menu');
  });
});

// Плагин расчета стоимости сепиков.
$.getScript('../View/FormCalculationCost/formCalculationCost.js');

// Плагин корзины в шапке сайта.
$.getScript('../View/js/cartHeader.js');

// inputQuantity in Page single product.
$.getScript('../View/js/inputQuantity.js');

// Cart
$.getScript('../View/Cart/ajaxCart.js');

// Search
$.getScript('../View/Search/actionSearch.js');

// Message header/ page Contact
$.getScript('../Core/Mail/action.js');

// Message footer
$.getScript('../View/Footer/actionFooter.js');

// Edit product.
$.getScript('/Admin/View/Product/ajax.js');