var mapa;

function initialize() {
  var opcionesDeMapa = {
    zoom: 15,
    center: new google.maps.LatLng(18.650681221062932, -91.81279765094884),
    mapTypeId: google.maps.MapTypeId.ROADMAP, //SATELITE, HYBRID, ROADMAP, TERRAIN
  };
  mapa = new google.maps.Map(document.getElementById("mapa"), opcionesDeMapa);
}

google.maps.event.addDomListener(window, "load", initialize);
