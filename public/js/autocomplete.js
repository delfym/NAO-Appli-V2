$(document).ready(function() {

var birds = [
	"Pigeon",
	"Mouette",
	"Moineau",
	"Hirondelle",
	"Aigle",
];


  $('#observation_bird').autocomplete({
	source: birds,
	minLength: 2
  });

});


