(function (document, $, undefined) {
    'use strict';
    /**
     
  GALLERY SLIDER*/
  $('.hero_slider').slick({
    arrows: false,
    autoplay:true,
    loop: true,
    
  });

  $('.responsive').slick({
    dots: true,
  infinite: false,
  slidesToShow: 2,
  slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

// welcome to fution section 
  $('.multiple-items').slick({
    arrows: false,
    infinite: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          infinite: true,
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    
    ]
  });

  $('.multiple-items-package').slick({
    infinite: true,
    arrows: false,
   
    slidesToShow: 1,
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
                  
  
  