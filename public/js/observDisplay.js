var mymap = L.map('mapid').setView([47.331, 2.465], 5);  //je pointe sur la france

var birdRefName;


/* init de la carte */
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
    maxZoom: 18,
    id: 'mapbox.streets',
    accessToken: 'pk.eyJ1IjoiZGVsZnk0OSIsImEiOiJjamhncXI4bGIwMHF1MzZsY20zcDVxdzh0In0.ODcQtyuIcVhhE4-XkbLzGA'
}).addTo(mymap);


//************************************************
$('form').on('click', '#btn-searchObs', function (e) {
    var marker;

    e.preventDefault();
    if($('.leaflet-marker-icon'))
    {
        $(this).each(function (e) {
            $('.leaflet-marker-icon').remove();
        });
    }
    birdRefName = $('#observation_autocomp_bird').val();
    console.log('hello ' + birdRefName);
    var path = $('#pathBirds').attr('data-path');
    $.post(path, {birdRefName: birdRefName},
        function (data) {
            var i = 0;
            $.each(data,function(){
                marker = L.marker([data[i].geo_latitude, data[i].geo_longitude]).addTo(mymap);
                i++;
            });
            // }
           // console.log(birdObservations); //affiche success
        })
        .fail("Nous n'\avons pas d\'observations pour cet oiseau\.");
});

// Afficher les données sur l('oiseeau

$('form').on('click', '#btn-displayInfos', function (e) {
    e.preventDefault();

    birdRefName = $('#observation_autocomp_bird').val();

    $('#infos').removeClass("invisible").addClass('visible');
    $('#birdNameVern').html("piaf");
    $('#birdClass').html("piaf");
    $('#birdFamily').html("piaf");

    var path = $('#infos').attr('data-path');
    console.log('voici le path : ' + path);
    $.post(path, {birdRefName: birdRefName},
        function (data) {
            var i = 0;
            console.log(data);
        //    $.each(data,function(){
               // marker = L.marker([data[i].geo_latitude, data[i].geo_longitude]).addTo(mymap);
        //        i++;
        //    });
            // }
            // console.log(birdObservations); //affiche success
        })
        .fail("Nous n'\avons pas trouvé cet oiseau\. Merci de ré-essayer");

});