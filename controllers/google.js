function initialize()
{
var x=document.getElementById('x').value;
var y=document.getElementById('y').value;
var posicion=new google.maps.LatLng(x,y);
var mapProp = {
center:posicion,
zoom:13,
mapTypeId:google.maps.MapTypeId.ROADMAP
};
var map=new google.maps.Map(document.getElementById("googleMap")
,mapProp);
var marker = new google.maps.Marker({
position: posicion,
map: map

});
}
