

/*============================= Nav Bar Fixed Top Vanilla Java Script ========================*/
window.addEventListener('scroll', function () {
  var menubar = document.querySelector("#mainNav");
  menubar.classList.toggle("fixed-top", window.scrollY > 200);
});

/*============================= Back To Top Button Script ========================*/
var mybutton = document.getElementById("backTop");
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
  if (document.body.scrollTop > 120 || document.documentElement.scrollTop > 120) {
    mybutton.style.display = "flex";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


(function ($) {
  // Main Header Nav links Active Class Genaretor
  $("#mainNav .navbar-nav li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
  $(".links__list a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");

  $("#heroSlider").owlCarousel({
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplaySpeed: 3000,
    loop: true,
    margin: 0,
    nav: true,
    dots: false, 
  });
 

  // Bottom Section Service Slider Activaton Script (Homepage)
  $(".productCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1, center: false  },
        576: { items: 2  },
        768: { items: 2 },
        992: { items: 3 }, 
        1200: { items: 3, margin: 30 }, 
        1400: { items: 3, margin: 40 }, 
    } 
  });
  // Home page about section about image slider Activaton Script (Homepage)
  $(".aboutImageSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: false,
    margin: 0,
    items: 1,
    nav: true,
    dots: false, 
    navText: [
      '<img src="images/icons/arrow-left.svg" class="img-fluid" alt="arrow left"/>',
      '<img src="images/icons/arrow-right.svg" class="img-fluid" alt="arrow left"/>'
    ]
  });

  // Process Slider Activaton Script (Homepage)
  $(".processCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 4,
    nav: false,
    dots: true,
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 2 },
        992: { items: 3, margin: 15 }, 
        1200: { items: 3, margin: 15 }, 
        1400: { items: 4, margin: 15 }, 
    } 
  });

  // Roofing Section Slider Activaton Script (Homepage)
  $(".roofingCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 1.35,
    nav: false,
    dots: false, 
  });

  // Roofing Section Slider Activaton Script (Homepage)
  $(".redefinCarousel").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 1.35,
    nav: false,
    dots: false, 
    rtl:true,
  });

  // Roofing Section Slider Activaton Script (Homepage)
  $(".testimonialSlider").owlCarousel({
    autoplay: true, 
    autoplayHoverPause: true,
    smartSpeed: 550,
    responsiveClass: true,
    autoplayTimeout: 10000,
    autoplaySpeed: 3000,
    loop: true,
    margin: 15,
    items: 1.35,
    nav: false,
    dots: false, 
    responsiveClass: true, 
    responsive: { 
        0: { items: 1 },
        576: { items: 1  },
        768: { items: 1 },
        992: { items: 2 }, 
        1200: { items: 2 },  
    } 
  });
   
  

  // Main Header Nav links Active Class Genaretor
  $("#blogPagination li a").filter(function () {
    return this.href == location.href.replace(/#.*/, "");
  }).parents("li").addClass("active");
  
 
})(jQuery);
 

 