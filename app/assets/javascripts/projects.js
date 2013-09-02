if(typeof(document.controllers) === "undefined") { document.controllers = {}; }

document.controllers["projects"] = {
  common: function () {
    map = L.map('map', {
      center: [51.505, -0.09],
      zoom: 13
    });

    L.tileLayer('http://tile.stamen.com/toner/{z}/{x}/{y}.png', {
      attribution: 'foobar',
      maxZoom: 20
    }).addTo(map);

    polygons = new L.GeoJSON(JSON.parse($("#geojson").text()));
    map.addLayer(polygons);
  },
  show: function () {

  },
  edit: function () {
    // Fill in the geojson field from the map editor when the
    // form gets submitted.
    $("form.edit_project").submit(function(){
      $(this).find("#project_geojson").val(JSON.stringify(drawnItems.toGeoJSON()));
    });

    // Initialize the FeatureGroup to store editable layers
    // var drawnItems = new L.FeatureGroup();
    // map.addLayer(drawnItems);

    // Initialize the draw control and pass it the FeatureGroup of editable layers
    var drawControl = new L.Control.Draw({
      edit: {
        featureGroup: polygons
      },
      draw: {
        polyline: false,
        rectangle: false,
        circle: false,
        marker: false
      }
    });
    map.addControl(drawControl);

    map.on('draw:created', function (e) {
      polygons.addLayer(e.layer);
    });
  }
}
