$(document).ready(function() {

/*var birds = [
	"Pigeon",
	"Mouette",
	"Moineau",
	"Hirondelle",
	"Aigle",
];*/

 //"http://nao.local/index.php/jq/birds"

  /*$("#observation_autocomp_bird").autocomplete({
	source : "http://nao.local/index.php/jq/birds",
	minLength : 3,
	success: function( data ) {
            response( data );
          }
  });*/

  var cache = {}; 
//à voir avec le "localstorage" ou le "sessionstorage", la variable "cache" est detuite à chaque reload de la page, elle n'a donc que peu d'interet
  var path = $("#observation_autocomp_bird").attr("data-path");
  $( "#observation_autocomp_bird" ).autocomplete({
      source: function( request, response ) {
        var term = request.term
      	if (term in cache) {
      		response($.map(cache[term], function(objet){
      			return objet.nom_de_reference;
      		}));
      	return;
      	}
        $.ajax( {
          url: path,
          dataType: "json",
          data: {
            term: term,
            maxRows: 12,
          },
          success : function( donnee ) {
          	cache[term] = donnee;
          	response($.map(donnee, function(objet){
          		return objet.nom_de_reference;
          	}));

          }
        } );
      },
      minLength: 2,
    } );

});


