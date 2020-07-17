var $ = require( "jquery" );
var Handlebars = require("handlebars");

$(document).ready(function() {

  $.ajax(
    {
      url: "http://localhost:8888/php-ajax-dischi/server.php",
      method: "GET",
      success: function(dataResponse) {
        printCds(dataResponse);
      },
      error: function () {
        alert("errore del server");
      }
    }
  );

});


function printCds(arrayDb) {

  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);

  for (var i = 0; i < arrayDb.length; i++) {
    var thisArray = arrayDb[i];

    var html = template(thisArray);

    $(".cds-container.container").append(html);
  }

}
