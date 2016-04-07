$(function() {

  "use strict";

  var topoffset = 55; //Used to determine start of a section (scrollspy)
  var wheight = $(window).height(); //get the height of the window
  var story = $('#story');


  $('.fullheight').css('height', wheight); //set to window tallness


  //adjust height of .fullheight elements on window resize
  $(window).resize(function() {
    wheight = $(window).height(); //get the height of the window
    $('.fullheight').css('height', wheight); //set to window tallness
  });


  // Set Bootstrap 'Scrollspy'
  $('body').scrollspy({
    target: 'header .navbar',
    offset: topoffset
  });

  // Activate Bootstrap 'Scrollspy'
  $('.navbar-fixed-top').on('activate.bs.scrollspy', function() {
    //find navigation (link) that's .active & store its 'href' value
    var hash = $(this).find('li.active a').attr('href');

    if (hash === '#contact'){
      topoffset = 0; //change topoffset var if in Contact section
      console.log(hash, topoffset);
    } else {
      topoffset = 55;
      console.log(hash, topoffset);
    }

album



    //check if user has scrolled past header (#wedding)
    if(hash !== '#wedding') {
      //when user has gone past header section
      $('header nav').addClass('scrolledPastHeader');
      $('.navbar').show(1000); //navbar is visible
    } else {
      //when user is in header section
      $('header nav').removeClass('scrolledPastHeader');
      $('.navbar').hide(); //navbar is invisible
    }
  });










  //Use smooth scrolling when clicking on navigation
  $('.navbar a[href*=#]:not([href=#])').click(function() {
    if ( location.pathname.replace(/^\//,'') ===
       (this.pathname.replace(/^\//,'')) &&
       ((location.hostname) === (this.hostname)) ) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          //topoffset set to 60
          scrollTop: target.offset().top - topoffset + 2
        }, 900);  //scroll speed
        return false;
      } //target.length
    } //click function
  }); //smooth scrolling


  // $('.navbar a[href*=#]:not([href=#])').click(function() {
  //   if (location.pathname.replace(/^\//,'') ===
  //     this.pathname.replace(/^\//,'') &&
  //     location.hostname === this.hostname) {
  //     var target = $(this.hash);
  //     target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
  //     if (target.length) {
  //       $('html,body').animate({
  //         scrollTop: target.offset().top-topoffset+2
  //       }, 900);  //scroll speed
  //       return false;
  //     } //target.length
  //   } //click function
  // }); //smooth scrolling

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



 $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });


  // Owl Carousel (plugin)
  story.owlCarousel({
        // Responsive Settings
        itemsCustom : [
          [0, 1],
          [750, 2],
          [1250, 3],
        ],
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window,

        // Playback
        autoPlay : 10000,
        slideSpeed : 500,
        rewindSpeed : 1000,
        stopOnHover : false,

        // Navigation
        navigation : false,
        //navigationText : ["prev","next"],
        rewindNav : true,
        scrollPerPage : false,

        // Pagination
        pagination : true,
        paginationNumbers: false,
        paginationSpeed : 800,

        // Lazy load
        lazyLoad : true,
        lazyFollow : true,
        lazyEffect : "fade",

        // Mouse Events
        dragBeforeAnimFinish : true,
        mouseDrag : true,
        touchDrag : true,
  });//Owl Carousel (end)



  function photosSizes(width, height){
    var htmlOutput = '<a data-flickr-embed="true" href="https://www.flickr.com/photos/136815676@N04/albums/72157660366946979" title="Nakissa &amp; Dom - Wedding Album">';
    htmlOutput += '<img src="https://farm1.staticflickr.com/781/22979080151_f7ef0b20d2_n.jpg"';
    htmlOutput += ' width="' + width + '"';
    htmlOutput += ' height="' + height + '"';
    htmlOutput += ' alt="Nakissa &amp; Dom - Wedding Album"></a><script async src="//embedr.flickr.com/assets/client-code.js" charset="utf-8"></script>';
    $('#flickr-photos').html(htmlOutput);
    //$('#flickr-album .modal-body').append(htmlOutput);
  }

(function(){
  function size() {
    if ( $(this).width() >= 1054 ) {
      photosSizes(1024,683);//1054px and up
    } else if ( $(this).width() >= 830 ) {
      photosSizes(800,534);//830px - 1053px
    } else if ( $(this).width() >= 670 ) {
      photosSizes(640,427);//670px - 829px
    } else if ( $(this).width() >= 570 ) {
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



}); //JQuery (end)
