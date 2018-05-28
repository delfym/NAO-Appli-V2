
var mymap = L.map('mapid').setView([47.331, 2.465], 5);

var myLocation;
var myLat;
var myLng;
var marker;

/* init de la carte */
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZGVsZnk0OSIsImEiOiJjamhncXI4bGIwMHF1MzZsY20zcDVxdzh0In0.ODcQtyuIcVhhE4-XkbLzGA'
}).addTo(mymap);




//localisation
mymap.locate({setView: true, maxZoom: 16});  //localisation

function onLocationFound(e) {
    var radius = e.accuracy / 2;
    myLat = e.latitude;
    myLng = e.longitude;
    L.marker(e.latlng).addTo(mymap)
        //.bindPopup("You are within " + radius + " meters from this point").openPopup();
        .bindPopup("<b>J'ai vu un oiseau ici : </b><br>Latitude : " + myLat + " - Longitude : " + myLng).openPopup();
    $('#gpsObs').val(myLat + " - " + myLng);
    L.circle(e.latlng, radius).addTo(mymap);
}

mymap.on('locationfound', onLocationFound);


//gestion des erreurs de localition
function onLocationError(e) {
    alert(e.message);
    console.log(e);
}


mymap.on('locationerror', onLocationError);

/* récupération des coordonnées sur le clic */

function onMapClick(e) {
    myLocation = e.latlng;
    myLat = myLocation.lat;
    myLng = myLocation.lng;
}


// ajout d'un marqueur
mymap.on('click', function (e) {
    onMapClick(e);

    if(marker != undefined)
    {
        marker.remove();
    }
    marker = L.marker([myLat, myLng]).addTo(mymap);
    marker.bindPopup("<b>J'ai vu un oiseau ici : </b><br>Latitude : " + myLat + " - Longitude : " + myLng).openPopup();

    $('#gpsObs').val(myLat + " - " + myLng);
});

