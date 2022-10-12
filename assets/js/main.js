(function ($) {
  "use strict";

  // Spinner
  var spinner = function () {
      setTimeout(function () {
          if ($('#spinner').length > 0) {
              $('#spinner').removeClass('show');
          }
      }, 1);
  };
  spinner();
  
  
  // Initiate the wowjs
  new WOW().init();

  AOS.init();


  // Sticky Navbar
  $(window).scroll(function () {
      if ($(this).scrollTop() > 45) {
          $('.navbar').addClass('sticky-top shadow-sm');
      } else {
          $('.navbar').removeClass('sticky-top shadow-sm');
      }
  });


  // Smooth scrolling on the navbar links
  $(".navbar-nav a").on('click', function (event) {
      if (this.hash !== "") {
          event.preventDefault();
          
          $('html, body').animate({
              scrollTop: $(this.hash).offset().top - 45
          }, 1500, 'easeInOutExpo');
          
          if ($(this).parents('.navbar-nav').length) {
              $('.navbar-nav .active').removeClass('active');
              $(this).closest('a').addClass('active');
          }
      }
  });
  
  
  // Back to top button
  $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
          $('.back-to-top').fadeIn('slow');
      } else {
          $('.back-to-top').fadeOut('slow');
      }
  });
  $('.back-to-top').click(function () {
      $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
      return false;
  });


  // Facts counter
  $('[data-toggle="counter-up"]').counterUp({
      delay: 10,
      time: 2000
  });


  // Screenshot carousel
  $(".screenshot-carousel").owlCarousel({
      autoplay: true,
      smartSpeed: 1000,
      loop: true,
      dots: true,
      items: 1
  });

  /**
 * Merchandise Slider
 */

   var cardSlider = new Swiper(".merchandise-slider", {
    autoplay: {
      delay: 4000,
      disableOnInteraction: false
    },
    loop: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    slidesPerView: 3,
    spaceBetween: 80,
    breakpoints: {
      320: {
        slidesPerView: 1,
        spaceBetween: 40
      },
      480: {
        slidesPerView: 1,
        spaceBetween: 80
      },
      640: {
        slidesPerView: 1,
        spaceBetween: 80
      },
        767: {
        slidesPerView: 1,
        spaceBetween: 80,
        },
        991: {
        slidesPerView: 2,
        spaceBetween: 80,
        },
    },
});

 

  /**
 * Visi & Misi Slider
 */
   var swiper = new Swiper('.visi-misi-slider', {
      speed: 400,
      loop: true,
      autoplay: false,
      // {
      //   delay: 5000,
      //   disableOnInteraction: false
      // },
      slidesPerView: 'auto',
      pagination: {
          el: '.swiper-pagination',
          type: 'bullets',
          clickable: true
        },
      slidesPerView: 1,
      spaceBetween: 30,
    });


     /**
 * Produk Slider
 */
      var swiper = new Swiper('.produk-slider', {
        speed: 400,
        loop: true,
        autoplay: false,
        // {
        //   delay: 5000,
        //   disableOnInteraction: false
        // },
        slidesPerView: 3,
        spaceBetween: 30,
        breakpoints: {
          320: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          480: {
            slidesPerView: 2,
            spaceBetween: 30
          },
          640: {
            slidesPerView: 3,
            spaceBetween: 30
          },
            767: {
            slidesPerView: 3,
            spaceBetween: 30,
            },
            991: {
            slidesPerView: 3,
            spaceBetween: 30,
            },
        },
      });


         /**
   * Program Slider
   */
          var swiper = new Swiper('.program-slider', {
            speed: 400,
            loop: true,
            autoplay: false,
            // {
            //   delay: 5000,
            //   disableOnInteraction: false
            // },
            slidesPerView: 4,
            spaceBetween: 30,
            breakpoints: {
              
              480: {
                slidesPerView: 2,
                spaceBetween: 10
              },
              640: {
                slidesPerView: 2,
                spaceBetween: 30
              },
                767: {
                slidesPerView: 2,
                spaceBetween: 30,
                },
                991: {
                slidesPerView: 3,
                spaceBetween: 30,
                },
            },
          });


  /**
 * Gallery Slider
 */
   var swiper = new Swiper('.gallery-slider', {
      speed: 400,
      loop: true,
      autoplay: false,
      // {
      //   delay: 5000,
      //   disableOnInteraction: false
      // },
      slidesPerView: 3,
      slidesPerColumn: 2,
      slidesPerGroup: 1,
      spaceBetween: 30,
      navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          640: {
            slidesPerView: 2,
          },
            767: {
            slidesPerView: 3,
            },
            991: {
            slidesPerView: 3,
            },
        },
    });

 

  /**
 * Managemeng Slider
 */
   var swiper = new Swiper('.management-slider', {
    speed: 400,
    loop: true,
    autoplay: false,
    // {
    //   delay: 5000,
    //   disableOnInteraction: false
    // },
    slidesPerView: 4,
    slidesPerColumn: 2,
    slidesPerGroup: 1,
    spaceBetween: 30,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
      },
        767: {
        slidesPerView: 2,
        },
        991: {
        slidesPerView: 3,
        },
        1200: {
        slidesPerView: 3,
        },
    },
  });

})(jQuery);

