//map
function initialize() {
  var latlng = new google.maps.LatLng(35.681563, 139.762716);
  var myOptions = {
    zoom: 17, 
    center: latlng, 
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map_canvas'), myOptions);
  /*icon▼*/
  var icon = new google.maps.MarkerImage('/wp/wp-content/themes/corporate/common/img/mapico.png',
    new google.maps.Size(296,74),/*iconsize*/
    new google.maps.Point(0,0)/*iconlocation*/
    );
  var markerOptions = {
    position: latlng,
    map: map,
    icon: icon,
    title: '株式会社プロポライフグループ'
  };
  var marker = new google.maps.Marker(markerOptions);
　/*iconend▲*/

/*style*/
  var styleOptions = [
  {
    "stylers": [
    { "saturation": -100 },
    { "visibility": "simplified" },
    { "lightness": 22 }
    ]
  }
  ];
  var styledMapOptions = { name: '株式会社プロポライフグループ' }
  var sampleType = new google.maps.StyledMapType(styleOptions, styledMapOptions);
  map.mapTypes.set('sample', sampleType);
  map.setMapTypeId('sample');
}