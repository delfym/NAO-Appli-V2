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

    e.preventDefault();
    if ($('.leaflet-marker-icon')) {
        $(this).each(function (e) {
            $('.leaflet-marker-icon').remove();
        });
    }
    birdRefName = $('#observation_autocomp_bird').val();
    var path = $('#pathBirds').attr('data-path');
    $.post(path, {birdRefName: birdRefName},
        function (data) {
            var i = 0;
            //dire que si plus de 3 points sur une petite zone changer de marqueur / "curseur"
            $.each(data, function () {
              var circle = L.circle([data[i].geo_latitude, data[i].geo_longitude], {
                color: 'red',
                fillColor: '#f03',
                fillOpacity: 0.5,
                radius: 500
        }).addTo(mymap);
                i++;
            });
        })
        .fail("Nous n'\avons pas d\'observations pour cet oiseau\.");
});

// Afficher les données sur l'oiseeau

$('form').on('click', '#btn-displayInfos', function (e) {
    e.preventDefault();

    birdRefName = $('#observation_autocomp_bird').val();

    var path = $('#infos').attr('data-path');

    $.post(path, {birdRefName: birdRefName},
        function (data) {
            if (data.length != 0) {
                $('#infos').removeClass("invisible").addClass('visible');

                $('#birdNameVern').html(data[0].nom_vernaculaire);
                $('#birdClass').html(data[0].classe);
                $('#birdFamily').html(data[0].famille);
                $('#birdOrder').html(data[0].ordre);
                $('#birdRegne').html(data[0].regne);
            } else {
                $("<p>Nous n\'avons pas trouvé cet oiseau. Merci de ré-essayer</p>").insertBefore($("#btn-displayInfos"));
            }
        })
        .fail(function () {
            alert("Nous n\'avons pas trouvé cet oiseau\. Merci de ré-essayer");
        });

});