$(function() {

  "use strict";

  var topoffset = 60; //50 variable for menu height
  var wheight = $(window).height(); //get the height of the window
  var story = $('#story');


  $('.fullheight').css('height', wheight); //set to window tallness


  //adjust height of .fullheight elements on window resize
  $(window).resize(function() {
    wheight = $(window).height(); //get the height of the window
    $('.fullheight').css('height', wheight); //set to window tallness
  });


  //Activate Scrollspy
  $('body').scrollspy({
    target: 'header .navbar',
    offset: topoffset
  });

  // add inbody class
  var hash = $(this).find('li.active a').attr('href');
  if(hash !== '#rsvp') {
  //used to be #featured
    $('header nav').addClass('inbody');
    $('.navbar').show(); //added
  } else {
    $('header nav').removeClass('inbody');
    $('.navbar').hide(); //added
  }



  // Add an inbody class to nav when scrollspy event fires
  $('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
    var hash = $(this).find('li.active a').attr('href');
    if(hash !== '#rsvp') {
    //used to be #featured
      $('header nav').addClass('inbody');
      $('.navbar').show(1000); //added
    } else {
      $('header nav').removeClass('inbody');
      $('.navbar').hide(1000); //added
    }
  });


  //Use smooth scrolling when clicking on navigation
  $('.navbar a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') ===
      this.pathname.replace(/^\//,'') &&
      location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset+2
        }, 900);  //scroll speed
        return false;
      } //target.length
    } //click function
  }); //smooth scrolling


  $('#drop a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') ===
      this.pathname.replace(/^\//,'') &&
      location.hostname === this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top-topoffset+2
        }, 900);  //scroll speed
        return false;
      } //target.length
    } //click function
  }); //smooth scrolling


  $('.carousel').carousel({
    interval: 50000
  });


 $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });




//Owl Carousel
  story.owlCarousel({

      // jsonPath : flickerAPI,
      // jsonSuccess : displayPic,

      itemsCustom : [
        [0, 1],
        [750, 2],
        [1250, 3],
      ],

      //itemsDesktop : [1199,4],
      //Basic Speeds
      slideSpeed : 500,
      paginationSpeed : 800,
      rewindSpeed : 1000,

      //Autoplay
      autoPlay : 10000, //Change to any integrer for example autoPlay : 5000 to play every 5 seconds. If you set autoPlay: true default speed will be 5 seconds.
      stopOnHover : false,

          // Navigation
      navigation : false,
      //navigationText : ["prev","next"],
      rewindNav : true,
      scrollPerPage : false,

          //Pagination
      pagination : true,
      paginationNumbers: false,


          // Responsive
      responsive: true,
      responsiveRefreshRate : 200,
      responsiveBaseWidth: window,

      //Lazy load
      lazyLoad : true,
      lazyFollow : true,
      lazyEffect : "fade",


          //Mouse Events
      dragBeforeAnimFinish : true,
      mouseDrag : true,
      touchDrag : true,

      //rewindSpeed : 1000,

      // navigation : true,
      //pagination : true, //set back to true
      //transitionStyle : "fade",

      //rewindSpeed: 5000
    });



function photosSizes(width, height){

var htmlOutput = '<a data-flickr-embed="true" href="https://www.flickr.com/photos/136815676@N04/albums/72157660366946979" title="Nakissa &amp; Dom - Wedding Album">';
htmlOutput += '<img src="https://farm1.staticflickr.com/781/22979080151_f7ef0b20d2_n.jpg"';
htmlOutput += ' width="' + width + '"';
htmlOutput += ' height="' + height + '"';
htmlOutput += ' alt="Nakissa &amp; Dom - Wedding Album"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>';
$('#flickr-photos').html(htmlOutput);
//console.log(html);
}

(function(){
  function size() {
    if ( $(this).width() >= 1054 ) {
      photosSizes(1024,683);//1054px and up
    } else if ( $(this).width() >= 830 ) {
      photosSizes(800,534);//830px - 1053px
    } else if ( $(this).width() >= 670 ) {
      photosSizes(640,427);//670px - 829px
    } else if ( $(this).width() >= 530 ) {
      photosSizes(500,333);//530px - 669px
    } else if ( $(this).width() >= 350 ) {
      photosSizes(320,213);//350px - 529px
    } else {
      photosSizes(240,160);//349px and lower
    }
  }
  $(window).on("resize", size);
  $(document).on("ready", size);
})();


}); //JQuery end
