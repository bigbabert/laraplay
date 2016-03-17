/*
 *Google Maps Developed
*/
var map;

function initialize() {
  var mapOptions = {
    zoom: 18,
    draggable: false,
    zoomControl: false,
    scaleControl: true,
    mapTypeId: 'roadmap'
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);

  
  // Try HTML5 geolocation
  if(navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var pos = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
                                       
                                        
      
       
var imagecanp = 'public/img/partenza.png';

var marker = new google.maps.Marker({
    map: map,
    position: pos,
    title: 'You are here',
    icon: imagecanp,
    draggable: false
});

var contentString = '<h4>You are here!</h4>' + 
        '<p>This is your position releved by Google Maps using Geolacation API JS V3!</p>';

var infoWindow = new google.maps.InfoWindow({
            content: contentString,
            maxWidth: 290
});


google.maps.event.addListener(marker, 'click', function() {
    infoWindow.open(map,marker);
});
marker.setMap(map);

map.setCenter(pos);     
    }, 
    
       function() {
      handleNoGeolocation(true);
    });
  } else {
    // Browser doesn't support Geolocation
    handleNoGeolocation(false);
  }
}

function handleNoGeolocation(errorFlag) {
  if (errorFlag) {
    var content = 'Error: The Geolocation service failed.';
  } else {
    var content = 'Error: Your browser doesn\'t support geolocation.';
  }

  var options = {
    map: map,
    position: new google.maps.LatLng(60, 105),
    content: content,
  };

  var infowindow = new google.maps.InfoWindow(options);
  map.setCenter(options.position);

}
google.maps.event.addDomListener(window, 'load', initialize);
