(function (document, $, undefined) {
    'use strict';
    /**
     
  GALLERY SLIDER*/
  $('.single-item').slick({
    arrows: false,
    autoplay:true,
    loop: true,
    dots: true
  });
// welcome to fution section 
  $('.multiple-items').slick({
    arrows: false,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1
  });


  // filter able portfolio script
  $('.grid').isotope({
    itemSelector: '.grid-item',
   });
   
   // filter items on button click
   $('.filter-button-group').on( 'click', 'li', function() {
    var filterValue = $(this).attr('data-filter');
    $('.grid').isotope({ filter: filterValue });
    $('.filter-button-group li').removeClass('active');
    $(this).addClass('active');
   });

  })(document, jQuery);
                  
  
  