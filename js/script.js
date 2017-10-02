// collapse scroll starts

$(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
        $(".scroll-top").fadeIn('1000', "easeInOutExpo");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
        $(".scroll-top").fadeOut('1000', "easeInOutExpo");
    }
});
 
// collapse scroll Ends

// Page Scrolling
$(function(){
  $('.overlay-menu ul li a,.scroll-top a').bind('click',function(event){
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  });
});
// end page scrolling

  
//Animation Wow Starts
$(function(){
wow = new WOW({
boxClass: 'wow',
animateClass: 'animated',
offset: 0,
mobile: true,
live :true
})
wow.init();

});
//Animation Wow Ends

// Jquery Starts
$(document).ready(function(){
    
    // superslides starts
  $('#slides').superslides({
    animation: 'fade',
    play: 5000,
    slide_easing:'easeInOutCubic',
    slide_speed: 2000,
    pagination: true,
    haschange: true,
    scrollable:true
  });
    // superslides ends

    // fancybox starts
  $('.youtube-media').on('click',function(e){
    var jWindow = $(window).width();
    if(jWindow <= 410){
      return;
    }
    $.fancybox({
      href: this.href,
      padding:4,
      type:"iframe",
      'href' : this.href.replace(new RegExp("watch\\?v=","i"),'v/')
    });
    return false;
  }); 
    // fancybox ends

    // Portofolio Gallery Starts
    $(function(){
      var owl = $(".recent-project-carousel");
      owl.owlCarousel({
        items:3,
        itemsDesktop: [1024,4],
        itemsTablet: [600,2],
        itemsMobile: [479,1],
        pagination: true,
        navigation:false
      });

      $(".btn-next").on('click',function(){
        owl.trigger('owl.next');
      })

      $(".btn-prev").on('click',function(){
        owl.trigger('owl.prev');
      })
    
    });
    // Portofolio Gallery Ends


    // light box starts
$(function(){
  $('.popup-gallery').magnificPopup({
    delegate: '.full-project a',
    type: 'image',
    tLoading: 'Loading image #%curr%...',
    minClass: 'mfp-img-mobile',
    gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1]
    },
    image: {
      tError:'<a href="%url%">The Image #%curr%</a> could not be loaded',
      titleSrc: function(item){
        return item.el.attr('title') + '<small>By GeeK Project</small>';
      }

    }
  });

});

    // light box ends

    // Portofolio2 offers

    $('#portfolio2 a').nivoLightbox({
      effect:'fadeScale'
    });


    // our client
     $(function(){
      var owl = $(".client-slider");
      owl.owlCarousel({
        items:3,
        itemsDesktop: [1024,4],
        itemsTablet: [600,2],
        itemsMobile: [479,1],
        pagination: true,
        navigation:false
      });

      $(".btn-next").on('click',function(){
        owl.trigger('owl.next');
      })

      $(".btn-prev").on('click',function(){
        owl.trigger('owl.prev');
      })
    
    });

     // testimonial section
     $(function(){
      var owl = $(".client-testimonials");
      owl.owlCarousel({
        navigation: false,
        slideSpeed : 300,
        paginationSpeed : 400,
        singleItem: true
      });
     });

     // Counter Section Starts


     $(function(){
        $('.counter-section').on('inview', function(event, visible, visiblePartX, visiblePartY){
          if(visible){
            $(this).find('.timer').each(function(){
              var $this = $(this);
              $({
                Counter: 0
              }).animate({
                Counter: $this.text()
              },{
                duration:2000,
                easing: 'swing',
                step: function(){
                  $this.text(Math.ceil(this.Counter));
                }
              });

            });

            $(this).off('inview');
          }
        });
     });


 }); //jquery ends


