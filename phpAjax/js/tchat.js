var url = "tchatAjax.php";
var lastId = 0;
$("document").ready(function(){
  $("#tchatForm").submit(function(){
    var message = $("#tchatForm textarea").val();
    $.post(url,{action:"addMessage", message : message},function(data){
      if(data.erreur=='ok'){
        //alert(data.id);
        getLastMessage();
      }else{
        alert(data.erreur);
      }
    },"json");
    return false;
  });
});

function getLastMessage(){
  $.post(url,{action:"getLastMessage"},function(data){
    $(".container .tchat").append(data + "</br>");
  });
}
