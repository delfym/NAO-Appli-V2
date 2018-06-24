var mymap = L.map('mapid').setView([47.331, 2.465], 5);  //je pointe sur la france

var myLat;
var myLng;

/* init de la carte */
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZGVsZnk0OSIsImEiOiJjamhncXI4bGIwMHF1MzZsY20zcDVxdzh0In0.ODcQtyuIcVhhE4-XkbLzGA'
}).addTo(mymap);


//************************************************

//localisation
$('form').on('blur', '#observation_autocomp_bird', function (e) {
    var birdRefName = $('#observation_autocomp_bird').val();
    console.log('hello' + birdRefName);
    var path = $('#pathBirds').attr('data-path');
    //console.log(path);
    $.post(path, {birdRefName: birdRefName},
        function (birdRefName) {
            console.log(birdRefName);
        })
        .fail("Nous n'\avons pas d\'observations pour cet oiseau\.");
});

//j'ajoute un marqueur
var marker = L.marker([51.5, -0.09]).addTo(mymap);


// ajout d'un marqueur*************************
mymap.on('click', function (e) {


    if(marker != undefined)
    {
        marker.remove();
    }
    marker = L.marker([myLat, myLng]).addTo(mymap);
    marker.bindPopup("<b>J'ai vu un oiseau ici : </b><br>Latitude : " + myLat + " - Longitude : " + myLng).openPopup();


});

$('form').on('change', '#geo_coordinates', function (e) {
    e.preventDefault();

    var path = $('.btn-grp-obs').attr('data-path');
    $.post(path, {obsId: idObs},
        function () {
            $('div#obs_' + idObs).remove();
        })
        .fail('Merci de valider de nouveau cette observation.');

});
//je récupère les ccoordonnées et je les envoie sur la carte
$('#observation_geo_latitude').val(myLat);
$('#observation_geo_longitude').val(myLng);