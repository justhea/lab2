/*global $, jQuery, alert*/
$(document).ready(function() {

  'use strict';

  // ========================================================================= //
  //  //SMOOTH SCROLL
  // ========================================================================= //


  $(document).on("scroll", onScroll);

  $('a[href^="#"]').on('click', function(e) {
    e.preventDefault();
    $(document).off("scroll");

    $('a').each(function() {
      $(this).removeClass('active');
      if ($(window).width() < 768) {
        $('.nav-menu').slideUp();
      }
    });

    $(this).addClass('active');

    var target = this.hash,
        menu = target;

    target = $(target);
    $('html, body').stop().animate({
      'scrollTop': target.offset().top - 80
    }, 500, 'swing', function() {
      window.location.hash = target.selector;
      $(document).on("scroll", onScroll);
    });
  });


  function onScroll(event) {
    if ($('.home').length) {
      var scrollPos = $(document).scrollTop();
      $('nav ul li a').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
      });
    }
  }

  // ========================================================================= //
  //  //NAVBAR SHOW - HIDE
  // ========================================================================= //


  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 200 ) {
      $("#main-nav, #main-nav-subpage").slideDown(700);
      $("#main-nav-subpage").removeClass('subpage-nav');
    } else {
      $("#main-nav").slideUp(700);
      $("#main-nav-subpage").hide();
      $("#main-nav-subpage").addClass('subpage-nav');
    }
  });

  // ========================================================================= //
  //  // RESPONSIVE MENU
  // ========================================================================= //

  $('.responsive').on('click', function(e) {
    $('.nav-menu').slideToggle();
  });

  // ========================================================================= //
  //  Typed Js
  // ========================================================================= //

  var typed = $(".typed");

  $(function() {
    typed.typed({
      strings: ["Carl Justin.", "Full stack developer.", "Gamer.", "Freelancer.", "Cyclist"],
      typeSpeed: 100,
      loop: true,
    });
  });


  // ========================================================================= //
  //  Owl Carousel Services
  // ========================================================================= //


  $('.services-carousel').owlCarousel({
      autoplay: true,
      loop: true,
      margin: 20,
      dots: true,
      nav: false,
      responsiveClass: true,
      responsive: { 0: { items: 1 }, 768: { items: 2 }, 900: { items: 4 } }
    });

  // ========================================================================= //
  //  magnificPopup
  // ========================================================================= //

  var magnifPopup = function() {
    $('.popup-img').magnificPopup({
      type: 'image',
      removalDelay: 300,
      mainClass: 'mfp-with-zoom',
      gallery: {
        enabled: true
      },
      zoom: {
        enabled: true, // By default it's false, so don't forget to enable it

        duration: 300, // duration of the effect, in milliseconds
        easing: 'ease-in-out', // CSS transition easing function

        // The "opener" function should return the element from which popup will be zoomed in
        // and to which popup will be scaled down
        // By defailt it looks for an image tag:
        opener: function(openerElement) {
          // openerElement is the element on which popup was initialized, in this case its <a> tag
          // you don't need to add "opener" option if this code matches your needs, it's defailt one.
          return openerElement.is('img') ? openerElement : openerElement.find('img');
        }
      }
    });
  };


  // Call the functions
  magnifPopup();

});

// ========================================================================= //
//  Porfolio isotope and filter
// ========================================================================= //
$(window).load(function(){

  var portfolioIsotope = $('.portfolio-container').isotope({
    itemSelector: '.portfolio-thumbnail',
    layoutMode: 'fitRows'
  });

  $('#portfolio-flters li').on( 'click', function() {
    $("#portfolio-flters li").removeClass('filter-active');
    $(this).addClass('filter-active');

    portfolioIsotope.isotope({ filter: $(this).data('filter') });
  });

})

//Javscript New
const d = new Date();
d.toString();
$(document).ready(function(){
  alert("The date is " + d);
});
//Javscript Header for each day
//  background: url("../images/home-bg.jpg") repeat scroll center center / cover;le
let text = "all"
document.getElementsByClassName("filter filter-active").innerHTML = text;
let dots = 1;
setInterval(() => {
    document.title = "Loading" + ".".repeat(dots);
    dots++;
    if (dots > 3) dots = 1;
}, 1000);



  function displayRandomQuote() {
    var quotes = [
      "The greatest glory in living lies not in never falling, but in rising every time we fall.",
      "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.",
      "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough.",
      "Your time is limited, don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.",
      "If life were predictable it would cease to be life, and be without flavor."
    ];

    var quotes = [
      {
        quote: "The greatest glory in living lies not in never falling, but in rising every time we fall.",
        author: "Nelson Mandela"
      },
      {
        quote: "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do.",
        author: "Steve Jobs"
      },
      {
        quote: "If you look at what you have in life, you'll always have more. If you look at what you don't have in life, you'll never have enough.",
        author: "Oprah Winfrey"
      },
      {
        quote: "Your time is limited, don't waste it living someone else's life. Don't be trapped by dogma – which is living with the results of other people's thinking.",
        author: "Steve Jobs"
      },
      {
        quote: "If life were predictable it would cease to be life, and be without flavor.",
        author: "Eleanor Roosevelt"
      }
    ];
  
    function displayRandomQuote() {
      var quote = quotes[Math.floor(Math.random() * quotes.length)];
      document.getElementById("quote-display").innerHTML = '<p>' + quote.quote + '</p> <p> - '+quote.author+'</p>';
    }

  function displayRandomImage() {
    var images = [
      "images/me.jpg",
      "images/s.jpg",
      "images/6.png",
      "images/14.png"
    ];

    var image = images[Math.floor(Math.random() * images.length)];
    document.getElementById("image-display").src = image;
  }

  // Call the function every 5 seconds
  setInterval(displayRandomImage, 2000);


