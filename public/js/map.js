$(document).ready(function (){




// create a LatLng object containing the coordinate for the center of the map
var latlng = new google.maps.LatLng(19.5700954, -155.9453347,226);

//var latlng = new google.maps.LatLng(-33.86455, 151.209);




// prepare the map properties
var options = {
zoom: 15,
center: latlng,
mapTypeId: google.maps.MapTypeId.ROADMAP,
navigationControl: true,
mapTypeControl: false,
scrollwheel: false,
disableDoubleClickZoom: true
};




// initialize the map object
var map = new google.maps.Map(document.getElementById('google_map'), options);




// add Marker
var marker1 = new google.maps.Marker({
	map: map,
    //draggable: true,
    animation: google.maps.Animation.DROP,
    position: latlng
});

  //marker1.setAnimation(google.maps.Animation.BOUNCE);


 
  
        marker1.setAnimation(google.maps.Animation.BOUNCE);
        stopAnimation(marker1);



function stopAnimation(marker1) {
    setTimeout(function () {
        marker1.setAnimation(null);
    }, 20000);
}

function myStopFunction() {
    clearTimeout(marker1);
}
// add listener for a click on the pin
google.maps.event.addListener(marker1, 'click', function() {
infowindow.open(map, marker1);
});




// add information window
// var infowindow = new google.maps.InfoWindow({
// content: '<div class="info"><strong>This is my company</strong>

// My company address is here
//  32846 Sydney</div>'
// }); 
});