

$('.obs').on('click', 'a', function (e) {
  e.preventDefault();
  console.log(e);
  var recupNum = $(e.target.name).value;
    console.log(recupNum);

});

