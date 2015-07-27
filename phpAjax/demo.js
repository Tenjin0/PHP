
$("document").ready(function(){
  $("#favoriForm").submit(function(){
    var data = {
      "action": "test"
    };

    data = $(this).serialize() + "&" + $.param(data);
    $(".return").html(data + '<br>');
    // console.log( $(this).serialize());
    // console.log( $(this));
    // console.log( $.extend($(this), {"action": "test"}).serialize());
    $.ajax({
	    type: 'POST',
	    url: 'response.php',
	    dataType : 'json',
	    // url: this.action,
      // data: $.extend($(this), {"action": "test"}).serialize(),
	    data: data,
		  success: function( data2, textStatus, jQxhr ){
        console.log('success',data2);
        $('.return').append(
          "Favorite beverage: " + data2.boisson + "<br />Favorite restaurant: " + data2.plat + "<br />Gender: " + data2.sexe + "<br />JSON: " + data2.json);
    },
	    error: function( jqXhr, textStatus, errorThrown ){
	        console.log( errorThrown );
          $('.return').html( textStatus ); 
	    }
	});
    return false;
  });
});
