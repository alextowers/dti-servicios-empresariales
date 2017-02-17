/* google maps */

function myMap() {
var mapProp= {
    center:new google.maps.LatLng(19.448909, -99.188978),
    zoom:18,
};
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
var marker = new google.maps.Marker({position: mapProp.center});

marker.setMap(map);
}
