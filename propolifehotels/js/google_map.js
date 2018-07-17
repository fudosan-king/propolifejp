function initialize() {
 var latlng = new google.maps.LatLng(35.681702,139.762432);
 var opts = {
 zoom: 18,
 center: latlng,
 mapTypeControl: true,
 mapTypeId: google.maps.MapTypeId.ROADMAP
 };
 var map = new google.maps.Map(document.getElementById("gmap"), opts);
 
 var styleOptions = [{
 
 'stylers': [{
 'gamma': 0.8
 }, {
 'saturation': -100
 }, {
 'lightness': 20
 }]
 }]
 
 var styledMapOptions = {
 name: 'Googlemap'
 }
 var monoType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
 map.mapTypes.set('mono', monoType);
 map.setMapTypeId('mono');
 
 var image = {
    url : 'images/gmap_marker.png',
    scaledSize : new google.maps.Size(240, 56)
 }
 var Marker = new google.maps.Marker({
 position: latlng,
 map: map,
 icon: image
 });
 
 var contentString = 'プロポライフホテルズMAP';
 var infowindow = new google.maps.InfoWindow({
 content: contentString
 });
 //infowindow.open(map, lopanMarker);
 google.maps.event.addListener(Marker, 'click', function() {
 infowindow.open(map, Marker);
 });
}
google.maps.event.addDomListener(window, 'load', initialize);