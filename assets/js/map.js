const stylesArray = [{ "featureType": "administrative", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 20 }] }, { "featureType": "administrative.country", "elementType": "labels.text", "stylers": [{ "color": "#ff0000" }, { "visibility": "off" }] }, { "featureType": "landscape.man_made", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 10 }] }, { "featureType": "landscape.natural", "elementType": "all", "stylers": [{ "visibility": "simplified" }, { "saturation": -60 }, { "lightness": 60 }] }, { "featureType": "poi", "elementType": "all", "stylers": [{ "visibility": "off" }, { "saturation": -100 }, { "lightness": 60 }] }, { "featureType": "road", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -100 }, { "lightness": 40 }, { "color": "#e0e0e0" }] }, { "featureType": "road", "elementType": "labels", "stylers": [{ "color": "#f5dada" }, { "visibility": "off" }] }, { "featureType": "transit", "elementType": "all", "stylers": [{ "saturation": -100 }, { "lightness": 60 }] }, { "featureType": "transit.line", "elementType": "labels.text.fill", "stylers": [{ "color": "#d45454" }] }, { "featureType": "water", "elementType": "all", "stylers": [{ "visibility": "on" }, { "saturation": -10 }, { "lightness": 30 }] }]

var mapOptions = {
  zoom: 12,
  center: new google.maps.LatLng(42.284928, -83.012048),
  draggable: false,
  scrollwheel: false,
  styles: stylesArray,
}

var map = new google.maps.Map(document.getElementById('map'), mapOptions);

var image = '/assets/img/marker.png';
var myLatLng = new google.maps.LatLng(42.2770961, -83.056597);
var beachMarker = new google.maps.Marker({
  position: myLatLng,
  map: map,
  icon: image
})