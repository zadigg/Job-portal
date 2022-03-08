

$("document").ready(function(){
    $("#login").click(function(event){
      event.preventDefault();
    var email=$("#email").val();
    var pass=$("#pass").val();
  
    $.ajax({
     type:'POST',
     url:'admindashboard.php',
     data:{admin_email:email,admin_pass:pass},
     dataType:'html',
     success:function(data){
      $("#msg").html(data);
     }
  
    });
     
  
    });
  
  });