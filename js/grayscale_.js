/*!
 * Start Bootstrap - Grayscale Bootstrap Theme (http://startbootstrap.com)
 * Code licensed under the Apache License v2.0.
 * For details, see http://www.apache.org/licenses/LICENSE-2.0.
 */

// jQuery to collapse the navbar on scroll

$(document).ready(function () {
              $(".navbar-toggle").on("click", function () {
                    $(this).toggleClass("active");
              });
        });

function collapseNavbar() {
    if ($(".navbar").offset().top > 50) {
        $(".navbar-fixed-top").addClass("top-nav-collapse");
    } else {
        $(".navbar-fixed-top").removeClass("top-nav-collapse");
    }
}





$(window).scroll(collapseNavbar);
$(document).ready(collapseNavbar);

// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.page-scroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
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


$('#myCarousel').carousel({


     interval:7000,
    keyboard:true


  /*  pause: true,
    interval: false*/
});




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
var showgoback = new TweenMax.to(".goback",.5,{opacity:1,bottom:"50px"});

new ScrollMagic.Scene({
    triggerElement:"#nastroje",
    triggerHook:"onEnter",
}).addTo(controller).setTween(showgoback);

//- MENU CRUISE
var menucruise = new TweenMax.fromTo(".navbar",.3,{position:"absolute",backgroundColor:"none",opacity:1},{className:'+=active',position:"fixed",background:"#ffc24b",opacity:1,ease:'easeInOutExpo'});

new ScrollMagic.Scene({
    triggerElement:"#page-top",
    triggerHook:"onLeave",
    offset:60,

}).addTo(controller).setTween(menucruise);


// INSIDE PINDED ANIMATION

//var menucruise_vlnka = new TweenMax.fromTo(".garniz1",12,{opacity:0,top:"0"},{top:"30px",opacity:1,ease:'easeInOutExpo'});

new ScrollMagic.Scene({
    triggerElement:"#reference",
    duration: 300,
    triggerHook:"onLeave",
    offset:700,

}).addTo(controller).setPin(".garniz1");

//.addIndicators()
//.setTween(menucruise_vlnka)


// new ScrollMagic.Scene({triggerElement: "#reference", duration: 150})
//             .setPin(".garniz1")
//             //.setClassToggle(".garniz1", "green")
//             .on("enter leave", updateBox)
//             .addIndicators() // add indicators (requires plugin)
//             .addTo(controller);


// INSIDE PINDED ANIMATION


//.setPin()
//.addIndicators()
//.addIndicators()


  loadGallery(true, 'a.thumbnail');

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

    function loadGallery(setIDs, setClickAttr){
        var current_image,
            selector,
            counter = 0;

        $('#show-next-image, #show-previous-image').click(function(){
            if($(this).attr('id') == 'show-previous-image'){
                current_image--;
            } else {
                current_image++;
            }

            selector = $('[data-image-id="' + current_image + '"]');
            updateGallery(selector);
        });

        function updateGallery(selector) {
            var $sel = selector;
            current_image = $sel.data('image-id');
            $('#image-gallery-caption').text($sel.data('caption'));
            $('#image-gallery-title').text($sel.data('title'));
            $('#image-gallery-image').attr('src', $sel.data('image'));
            disableButtons(counter, $sel.data('image-id'));
        }

        if(setIDs == true){
            $('[data-image-id]').each(function(){
                counter++;
                $(this).attr('data-image-id',counter);
            });
        }
        $(setClickAttr).on('click',function(){
            updateGallery($(this));
        });
    }


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