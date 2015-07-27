var url = 'tchatAjax.php';
$(function(){
	$('#tchatForm').submit(function(){
		// showLoader("#tchatForm");
		var message = $('#tchatForm textarea').val();
		$.post(url,{action:"addMessage",message:message},function(data){
			alert(data);
		});
		return false;
	});
});

function showLoader(div){

	$(div).append('<div class="loader"></div>');
	$(".loader").fadeTo(500,0.6);
}