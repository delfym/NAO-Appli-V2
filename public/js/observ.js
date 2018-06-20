
$('.obs').on('click', 'a', function (e) {
  e.preventDefault();
  //console.log(e);

  var recupNum = $(e.target);
  var parentElt = $(parent).val();
  var idParent = "#" + $(parent).attr("id");
  console.log(recupNum);
  console.log('parent : ' + parentElt);

  var test = $('.numObs').attr("id");
 //   console.log(test);
  var testLength = test.length;
  var testId = test.charAt(testLength - 1);
 // console.log(testId);
});



