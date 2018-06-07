$(document).ready(function() {

var birds = [
	"Pigeon",
	"Mouette",
	"Moineau",
	"Hirondelle",
	"Aigle",
];



  $("#observation_bird").autocomplete({
	source : "http://nao.local/index.php/jq/birds",
	minLength : 3,

	
  });
});


