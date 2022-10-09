// quantity

function increaseCount(a, b) {
    var input = b.previousElementSibling;
    var value = parseInt(input.value, 10); 
    value = isNaN(value)? 0 : value;
    value ++;
    input.value = value;
  }
  function decreaseCount(a, b) {
    var input = b.nextElementSibling;
    var value = parseInt(input.value, 10); 
    if (value > 1) {
      value = isNaN(value)? 0 : value;
      value --;
      input.value = value;
    }
  }

// 

 // register

 $(document).ready(function(){
    
  // Variables
  var clickedTab = $(".tabs > .active");
  var tabWrapper = $(".tab__content");
  var activeTab = tabWrapper.find(".active");
  var activeTabHeight = activeTab.outerHeight();
  
  // Show tab on page load
  activeTab.show();
  
  // Set height of wrapper on page load
  tabWrapper.height(activeTabHeight);
  
  $(".tabs > li").on("click", function() {
      
      // Remove class from active tab
      $(".tabs > li").removeClass("active");
      
      // Add class active to clicked tab
      $(this).addClass("active");
      
      // Update clickedTab variable
      clickedTab = $(".tabs .active");
      
      // fade out active tab
      activeTab.fadeOut(250, function() {
          
          // Remove active class all tabs
          $(".tab__content > li").removeClass("active");
          
          // Get index of clicked tab
          var clickedTabIndex = clickedTab.index();

          // Add class active to corresponding tab
          $(".tab__content > li").eq(clickedTabIndex).addClass("active");
          
          // update new active tab
          activeTab = $(".tab__content > .active");
          
          // Update variable
          activeTabHeight = activeTab.outerHeight();
          
          // Animate height of wrapper to new tab height
          tabWrapper.stop().delay(50).animate({
              height: activeTabHeight
          }, 500, function() {
              
              // Fade in active tab
              activeTab.delay(50).fadeIn(250);
              
          });
      });
  });
});

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

// 
$(document).ready(function () {
    var trigger = $('.hamburger'),
        overlay = $('.overlay'),
       isClosed = false;
  
      trigger.click(function () {
        hamburger_cross();      
      });
  
      function hamburger_cross() {
  
        if (isClosed == true) {          
          overlay.hide();
          trigger.removeClass('is-open');
          trigger.addClass('is-closed');
          isClosed = false;
        } else {   
          overlay.show();
          trigger.removeClass('is-closed');
          trigger.addClass('is-open');
          isClosed = true;
        }
    }
    
    $('[data-toggle="offcanvas"]').click(function () {
          $('#wrapper').toggleClass('toggled');
    });  
  });

//  login

$(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });

//  orintal slider
	  $(document).ready(function()
		{
		if($('.bbb_viewed_slider').length)
		{
		var viewedSlider = $('.bbb_viewed_slider');

		viewedSlider.owlCarousel(
		{
		loop:true,
		margin:30,
		autoplay:true,
		autoplayTimeout:6000,
		nav:false,
		dots:false,
		responsive:
		{
		0:{items:1},
		575:{items:2},
		768:{items:3},
		991:{items:4},
		1199:{items:4}
		}
		});

		if($('.bbb_viewed_prev').length)
		{
		var prev = $('.bbb_viewed_prev');
		prev.on('click', function()
		{
		viewedSlider.trigger('prev.owl.carousel');
		});
		}

		if($('.bbb_viewed_next').length)
		{
		var next = $('.bbb_viewed_next');
		next.on('click', function()
		{
		viewedSlider.trigger('next.owl.carousel');
		});
		}
		}
		});

// french_slider

	$(document).ready(function()
  {
  if($('.bbb_viewed_slider1').length)
  {
  var viewedSlider1 = $('.bbb_viewed_slider1');

  viewedSlider1.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:true,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:3},
  991:{items:4},
  1199:{items:4}
  }
  });
  
  }
  });

  // niche_slider
	$(document).ready(function()
  {
  if($('.bbb_viewed_slider2').length)
  {
  var viewedSlider2 = $('.bbb_viewed_slider2');

  viewedSlider2.owlCarousel(
  {
  loop:true,
  margin:30,
  autoplay:true,
  autoplayTimeout:6000,
  nav:true,
  dots:false,
  navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
  responsive:
  {
  0:{items:1},
  575:{items:2},
  768:{items:3},
  991:{items:4},
  1199:{items:4}
  }
  });
  
  }
  });

  // <!-- reviews -->
    $(document).ready(function()
    {
    if($('.bbb_viewed_slider3').length)
    {
    var viewedSlider3 = $('.bbb_viewed_slider3');
  
    viewedSlider3.owlCarousel(
    {
    loop:true,
    margin:30,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    dots:false,
    navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
    responsive:
    {
    0:{items:1},
    575:{items:2},
    768:{items:2},
    991:{items:3},
    1199:{items:3}
    }
    });
    }
    });
  
    // <!--/login-->
		$(document).ready(function () {
			$(".button-log a").click(function () {
				$(".overlay-login").fadeToggle(200);
				$(this).toggleClass('btn-open').toggleClass('btn-close');
			});
		});
		$('.overlay-close1').on('click', function () {
			$(".overlay-login").fadeToggle(200);
			$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
			open = false;
		});
  
// <!--//login-->
    // optional
		$('#customerhnyCarousel').carousel({
				interval: 5000
    });


     // <!-- the most wanted -->
     $(document).ready(function()
     {
     if($('.bbb_viewed_slider5').length)
     {
     var viewedSlider5 = $('.bbb_viewed_slider5');
   
     viewedSlider5.owlCarousel(
     {
     loop:true,
     margin:30,
     autoplay:true,
     autoplayTimeout:6000,
     nav:true,
     dots:false,
     navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
     responsive:
     {
     0:{items:1},
     575:{items:2},
     768:{items:3},
     991:{items:4},
     1199:{items:4}
     }
     });
     }
     });

     // <!-- offers -->
     $(document).ready(function()
     {
     if($('.bbb_viewed_slider6').length)
     {
     var viewedSlider6 = $('.bbb_viewed_slider6');
   
     viewedSlider6.owlCarousel(
     {
     loop:true,
     margin:30,
     autoplay:true,
     autoplayTimeout:6000,
     nav:true,
     dots:false,
     navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
     responsive:
     {
     0:{items:1},
     575:{items:2},
     768:{items:3},
     991:{items:4},
     1199:{items:4}
     }
     });
     }
     });

    // <!-- recommendation -->
      $(document).ready(function()
      {
      if($('.bbb_viewed_slider4').length)
      {
      var viewedSlider4 = $('.bbb_viewed_slider4');
    
      viewedSlider4.owlCarousel(
      {
      loop:true,
      margin:30,
      autoplay:true,
      autoplayTimeout:6000,
      nav:true,
      dots:false,
      navText : ["<i class='icofont-scroll-left'></i>","<i class='icofont-scroll-right'></i>"],
      responsive:
      {
      0:{items:1},
      575:{items:2},
      768:{items:3},
      991:{items:4},
      1199:{items:4}
      }
      });
      }
      });
    
        // <!-- //cart-js -->

      transmitv.render();
 
      transmitv.cart.on('transmitv_checkout', function (evt) {
          var items, len, i;
 
          if (this.subtotal() > 0) {
              items = this.items();
 
              for (i = 0, len = items.length; i < len; i++) {}
          }
      });

      // <!--//pop-up-box-->

        $(document).ready(function () {
          $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
          });
      
        });
        

              // <!-- menu -->

        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });

    // 
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

// 

$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});

// 
     new WOW().init();

 

function openNav() {
  document.getElementById("mySidenav").style.width = "230px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

// if ($("body").attr("dir") == "rtl")
//     $('#carouselExampleIndicators').stop().animate({ marginRight: -positions[pos] + 'px' }, 450);
// else
//     $('#carouselExampleIndicators').stop().animate({ marginLeft: -positions[pos] + 'px' }, 450); 