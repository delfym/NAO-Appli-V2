
$('.obs').on('click', 'a', function (e) {
  e.preventDefault();

  var idBtn = $(e.target).attr("name");
  idBtn = idBtn.split('_',3); //récup de l'id de l'observation sélectionnée
  console.log(idBtn[1]);
   var idObs = idBtn[1];

  //var todayVal = new Date();

    var path = $('.btn-grp-obs').attr('data-path');
    $.post(path, {obsId: idObs },
        function () {
            $('obs_'+idObs).remove();
          })
        .fail('Merci de valider de nouveau cette observation.');

});



