function myMap(){
  var map_center = new google.maps.LatLng(33.105647, -96.829771)
  var map_div = document.getElementById("map")
  var mapOptions = {
    center: map_center,
    zoom: 13,
  }


  var map = new google.maps.Map(map_div, mapOptions);
  var marker = new google.maps.Marker( {position: map_center})
  marker.setMap(map)
}
