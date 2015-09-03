$(function() {

  "use strict";
  var topoffset = 50; //variable for menu height
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
      $('.navbar').show('slow'); //added
    } else {
      $('header nav').removeClass('inbody');
      $('.navbar').hide('slow'); //added
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

  // $('.carousel').carousel({
  //   interval: 50000
  // });


 $(".navbar-nav li a").click(function (event) {
    // check if window is small enough so dropdown is created
    var toggle = $(".navbar-toggle").is(":visible");
    if (toggle) {
      $(".navbar-collapse").collapse('hide');
    }
  });


  story.owlCarousel({
      itemsCustom : [
        [0, 1],
        [750, 2],
        [1250, 3],
      ],
      autoPlay: 10000, //Set AutoPlay to 10 seconds
      pagination : true,
      paginationSpeed : 800,
      //rewindSpeed : 1000,
      goToFirstSpeed : 2000,
      slideSpeed : 500,
      //stopOnHover : true,
      items : 3,
      lazyLoad : true,
      lazyFollow : false,
      lazyEffect : "fade",
      // navigation : true,
      //pagination : true, //set back to true
      transitionStyle : "fade",
      rewindNav: true, //Slide to first item.
      rewindSpeed: 2000
    });




}); //JQuery end