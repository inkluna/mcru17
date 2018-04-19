/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll

$(window).load(function(){


        // $("#pre-loader").delay(400).fadeOut(2000);
        // $(".preload-logo").addClass('zoomOutUp');
        // $(".loader").addClass('zoomOutDown');





  /*var first = $(".anim1");
var second = $(".anim2");
var third = $(".anim3");
var four = $(".anim4");

  //The last parameter with value of .25 is the stagger amount. Try changing it to 1 see how it impacts the animation.
  TweenMax.staggerFrom([first, second, third,four], 0.7,  {position:"relative",y:"25px", opacity:0,delay:0.5,ease:Linear.easeNone}, 0.25);
*/



if ($('.alert').length){

     $('html, body').animate({
          scrollTop: $("#objednat").offset().top
     }, 1500, 'easeInOutExpo');

    };

});


$(document).ready(function () {



$("#xmpl1 a").tosrus();


$("#galerie .thumbnail").tosrus({
   slides     : {
      scale      : "fit"
   },
   caption    : {
      add        : true
   },
   pagination : {
      add        : true,
      type       : "thumbnails"
   },
   infinite: true,
   buttons    : true
});


              $(".navbar-toggle").on("click", function () {
                    $(this).toggleClass("active");
              });
        });

function collapseNavbar() {
    // if ($(".navbar").offset().top > 50) {
    //     $(".navbar-fixed-top").addClass("top-nav-collapse");
    // } else {
    //     $(".navbar-fixed-top").removeClass("top-nav-collapse");
    // }
}





$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {

    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1300, 'easeInOutExpo');
        event.preventDefault();
    });
});

// Closes the Responsive Menu on Menu Item Click
$('.navbar-collapse ul li a').click(function() {
  if ($(this).attr('class') != 'dropdown-toggle active' && $(this).attr('class') != 'dropdown-toggle') {
    $('.navbar-toggle:visible').click();
  }
});




// GREENSOCK ANIMATION



// Swipe ----------------------
$(function() {


// $('#myCarousel').carousel({

//      interval:7000,
//     keyboard:true

//   /*  pause: true,
//     interval: false*/
// });




    //------------------
    // init magic scroll
    //------------------


       var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            //       triggerHook: 'onLeave'
            //        duration: $('section').height(),
            //   triggerHook: .025,
            //reverse: true
        }
    });
      // Only scroll Animation
    controller.scrollTo(function(target) {
        TweenMax.to(window, 2.5, {
            scrollTo: {
                y: target,
                autoKill: true // Allow scroll position to change outside itself
            },
            ease: Cubic.easeInOut
        });
    });


    // Add class on menu Opend

    //-----------------------------------------------------------
    //  Pulsing points----------------------
    //-----------------------------------------------------------




 $(".btn-circle  ").on("mouseenter",function() {
 var pulse =  new TweenMax.fromTo($(this).find(".fa") , 1,
                                 {scale:1,opacity:1},
                                 {scale: 1,y:"10px",opacity:0, repeat: -1, ease: Circ.easeInOut});


     }).on("mouseleave",function(){
         var showgoback = new TweenMax.to($(this).find(".fa"),.5,{opacity:1,y:"0px"});


     });
    //-----------------------------------------------------------
    //  Scroll and tween----------------------
    //-----------------------------------------------------------

//- GO TOP BUTTON
var showgoback = new TweenMax.to(".goback",.5,{opacity:1,bottom:"15px"});
// var showspecials = new TweenMax.to(".specials",.5,{opacity:1});
// var showanapanel = new TweenMax.to("#anahitapanel",.5,{opacity:1,left:"0px"});

new ScrollMagic.Scene({
    triggerElement:"#sponzori",
    triggerHook:"onLeave",
    offset:300,
}).addTo(controller).setTween(showgoback);
// new ScrollMagic.Scene({
//     triggerElement:"#sablony",
//     triggerHook:"onLeave",
//     offset:300,
// }).addTo(controller).setTween(showspecials);

// new ScrollMagic.Scene({
//     triggerElement:"#galerie",
//     triggerHook:"onEnter",
//     offset:300,
// }).addTo(controller).setTween(showanapanel);


//- MENU CRUISE
var menucruise = new TweenMax.fromTo(".navbar",.3,{position:"absolute",backgroundColor:"none",opacity:.9},{className:'+=active',position:"fixed",background:"#2E1E3F",opacity:1,ease:'easeInOutExpo'});

new ScrollMagic.Scene({
    triggerElement:"#page-top",
    triggerHook:"onLeave",
    offset:80,

}).addTo(controller).setTween(menucruise);


// INSIDE PINDED ANIMATION

// var menucruise_vlnka = new TweenMax.fromTo(".garniz1",2,{opacity:1,top:"0"},{top:"-200px",opacity:1,ease:'easeInOutExpo'});

// new ScrollMagic.Scene({
//     triggerElement:"#reference",
//     duration: 300,
//     triggerHook:"onLeave",
//     offset:0,

// }).addTo(controller).setTween(menucruise_vlnka).addIndicators();


// INSIDE PINDED ANIMATION


//.setPin()
//.addIndicators()
//.addIndicators()




    //This function disables buttons when needed
    function disableButtons(counter_max, counter_current){
        $('#show-previous-image, #show-next-image').show();
        if(counter_max == counter_current){
            $('#show-next-image').hide();
        } else if (counter_current == 1){
            $('#show-previous-image').hide();
        }
    }

    /**
     *
     * @param setIDs        Sets IDs when DOM is loaded. If using a PHP counter, set to false.
     * @param setClickAttr  Sets the attribute for the click handler.
     */




});


// Scrolling Detection

 /* $(window).scroll(function() {

    var scrolled_val = $(document).scrollTop().valueOf();

  //  var menucruise2 = new TweenMax.to(".navbar",.5,{opacity:1,right:"0"});



        // do something
        clearTimeout($.data(this, 'scrollTimer'));
    $.data(this, 'scrollTimer', setTimeout(function() {
        // Hide menu when is the position bigger then 10
         if(scrolled_val  > 10) {
        var menucruise = new TweenMax.to(".navbar",2,{opacity:0,right:"-300px"});
        }
    }, 2850));


});*/





//function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(50.1102623,14.567903000000001),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.1102623,14.567903000000001)});infowindow = new google.maps.InfoWindow({content:'<strong> Anahita plus s.r.o.</strong><br>Skorkovská 1151,Praha 9 - Černý Most<br> Prague<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>

var lFollowX = 0,
    lFollowY = 0,
    x = 0,
    y = 0,
    friction = 1 / 30;

function moveBackground() {
  x += (lFollowX - x) * friction;
  y += (lFollowY - y) * friction;

  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

  $('.bg').css({
    '-webit-transform': translate,
    '-moz-transform': translate,
    'transform': translate
  });

  window.requestAnimationFrame(moveBackground);
}

$(window).on('mousemove click', function(e) {

  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
  lFollowY = (10 * lMouseY) / 100;

});

moveBackground();