//= require jquery
//= require jquery_ujs
//= require bootstrap
//= require leaflet/leaflet.js
//= require leaflet/leaflet.draw.js
//= require init.js.coffee
//= require projects.js

// manually set the icon path for leaflet
L.Icon.Default.imagePath = "/assets/leaflet/";

function toWKT(layer) {
    var lng, lat, coords = [];
    if (layer instanceof L.Polygon || layer instanceof L.Polyline) {
        var latlngs = layer.getLatLngs();
        for (var i = 0; i < latlngs.length; i++) {
	    	latlngs[i]
	    	coords.push(latlngs[i].lng + " " + latlngs[i].lat);
	        if (i === 0) {
	        	lng = latlngs[i].lng;
	        	lat = latlngs[i].lat;
	        }
	};
        if (layer instanceof L.Polygon) {
            return "POLYGON((" + coords.join(",") + "," + lng + " " + lat + "))";
        } else if (layer instanceof L.Polyline) {
            return "LINESTRING(" + coords.join(",") + ")";
        }
    } else if (layer instanceof L.Marker) {
        return "POINT(" + layer.getLatLng().lng + " " + layer.getLatLng().lat + ")";
    }
}
