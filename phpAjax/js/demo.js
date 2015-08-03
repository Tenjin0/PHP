$("document").ready(function(){
  $("#idFormDemo").submit(function(){
    var data = {
    "action": "test"
  };
    console.log( $(this).serialize());
    console.log( $(this));
    console.log( $.extend($(this), {"action": "test"}).serialize());
    data = $(this).serialize();//+ "&" + $.param(data);
    $.ajax({
      type : 'POST',
      url : 'response.php',
	    dataType : 'json',
      data : data,
      success: function(data) {
        console.log("success",data);
        $(".return").html(
          "Plat favoris : " + data.plat + "<br>" +
          "Boisson favoris : " + data.boisson + "<br>" +
          "Sexe : " + data.sexe + "<br>" +
          "json : " + data.json + "<br>"
        );
      },
      error : function(jQxhr, textStatus, errorThrown){
        console.log( jQxhr, textStatus);
      }
    });
    return false;
  });
});
