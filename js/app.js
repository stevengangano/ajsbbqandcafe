// var myCenter=new google.maps.LatLng(37.720997, -122.446220)
// function initialize() {
//   var mapProp = {
//     center:myCenter,
//     zoom:15,
//     mapTypeId:google.maps.MapTypeId.ROADMAP
//   };
//   var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);
//   var marker=new google.maps.Marker({
//   	position:myCenter,
//   })
//   marker.setMap(map)
//   var infowindow = new google.maps.InfoWindow({
//   content:"2275 San Jose Avenue, San Francisco, CA 94112"
//   });
// google.maps.event.addListener(marker, 'click', function() {
//   infowindow.open(map,marker);
//   });
// }
// google.maps.event.addDomListener(window, 'load', initialize);

jQuery(".matchHeight").equalHeights();