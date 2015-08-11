

	$("#locations").prepend('<div id="map-canvas"></div>');
	$(".static_map").remove();
	function initialize() {
        var mapOptions = {
         	center: { lat: -34.397, lng: 150.644},
          	zoom: 8
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
     }
     google.maps.event.addDomListener(window, 'load', initialize);

	var topoffset = 50;  //variable for menu height






  // hide .navbar first
  // $(".navbar").hide();
  
  // // fade in .navbar
  // $(function () {
  //   $(window).scroll(function () {
  //           // set distance user needs to scroll before we fadeIn navbar
  //     if ($(this).scrollTop() > 500) {
  //       $('.navbar').fadeIn();
  //     } else {
  //       $('.navbar').fadeOut();
  //     }
  //   });

  
  // });









$(".navbar").hide();
	// Add an 'inbody' class to nav when scrollspy event fires
	$('nav').on('activate.bs.scrollspy', function() {
		var hash = $(this).find('li.active a').attr('href');
    if(hash !== '#featured') {
      $('header nav').addClass('show');
    } else {
      $('header nav').removeClass('show');
    }
	});








// var wheight = $(window).height(); //get height of the window

// $('.fullheight').css('height', wheight);



});  //JQuery is loaded