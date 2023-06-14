(function (document, $, undefined) {
    'use strict';
    /**
     
  GALLERY SLIDER*/
  $('.hero_slider').slick({
    arrows: false,
    autoplay:true,
    loop: true,
    dots: true
  });

  // $('.hero_slider').slick({
  //   dots: true,
  //   infinite: true,
  //   fade:true,
  //   speed: 300,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   // autoplay: true,
  //   // autoplaySpeed: 2000,
  //   responsive: [
  //     {
  //       breakpoint: 1024,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //         infinite: true,
  //         dots: true
  //       }
  //     },
  //     {
  //       breakpoint: 600,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1,
  //       }
  //     },
  //     {
  //       breakpoint: 480,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  // });

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
                  
  
  