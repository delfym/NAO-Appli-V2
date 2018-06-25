var mymap = L.map('mapid').setView([47.331, 2.465], 5);  //je pointe sur la france

var myLat;
var myLng;
var birdRefName;

/* init de la carte */
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZGVsZnk0OSIsImEiOiJjamhncXI4bGIwMHF1MzZsY20zcDVxdzh0In0.ODcQtyuIcVhhE4-XkbLzGA'
}).addTo(mymap);


//************************************************


$('form').on('blur', '#observation_autocomp_bird', function (e) {
    birdRefName = $('#observation_autocomp_bird').val();
    console.log('hello ' + birdRefName);
});

//j'ajoute un marqueur
var marker = L.marker([51.5, -0.09]).addTo(mymap);

/*
$('').on('change', '#geo_coordinates', function (e) {
    e.preventDefault();

    var path = $('.btn-grp-obs').attr('data-path');
    $.post(path, {obsId: idObs},
        function () {
            $('div#obs_' + idObs).remove();
        })
        .fail('Merci de valider de nouveau cette observation.');

});
*/

$('form').on('click', '#btn-displayInfos', function (e) {
    e.preventDefault();

    $('div#infos').removeClass("invisible").addClass("visible");

    $('#birdNameVern').html('piaf');
    $('#birdFamily').html('piaf lala');
    $('#birdClass').html('piaf pas comme les autres');

    var path = $('#pathBirds').attr('data-path');
    $.post(path, {birdRefName: birdRefName},
        function (data) {
            //for (var i=0; i <= data.length ; i++) {
            console.log(data);
            //console.log(data.geo_longitude);
            //console.log(data.comment);
            var i = 0;
            $.each(data,function(){
                console.log(data[i].geo_latitude);
                console.log(data[i].geo_longitude);
                i++;
            });
            // }
           // console.log(birdObservations); //affiche success
        })
        .fail("Nous n'\avons pas d\'observations pour cet oiseau\.");

    //je récupère les ccoordonnées et je les envoie sur la carte
   // $('#observation_geo_latitude').val(myLat);
   // $('#observation_geo_longitude').val(myLng);

});
