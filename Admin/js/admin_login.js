$("document").ready(function(){
  $("#submit").click(function(event){
    event.preventDefault();
  var email=$("#inputEmail").val();
  var pass=$("#inputPassword").val();

  $.ajax({
   type:'POST',
   url:'login.php',
   data:{user_email:email,user_pass:pass},
   dataType:'html',
   success:function(data){
    $("#msg").html(data);
   }

  });
   

  });

});