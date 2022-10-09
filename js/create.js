$(function(){

  
  mydisplay = function(){
    $.ajax( {
      type: "POST",
      url: "display.php",
      success: function(data, status){
        $("#demo").html(data);
        // $(":reset");
        
      },
    });
  }
 

  mydisplay();
  //submit form create
  $("#form-create").submit(function(event){
  var send = $("#send").val();
  var username = $("#name").val();
  var email = $("#email").val();
  var password = $("#password").val();
  var newpassword = $("#newpassword").val();
  
 alert("MOhammad");
  console.log(username + email + password + newpassword);

  $.ajax( {
    type: "POST",
    url: "insert.php",
    data: {
      send:send,
      username:username,
      email:email,
      password:password,
      newpassword:newpassword,
    },
    success: function(data, status){
      console.log("123"); 
      $("#result").html(data);
        mydisplay();
      // $(":reset");
      $("#form-create")[0].reset();
    },
  });

  event.preventDefault();
})
});

function edit(id){
  $.ajax( {
    type: "POST",
    url: "edit.php",
    data:{
      id:id
    },
    success: function(data, status){
      console.log("done"); 
      console.log(status);
        $("#display_1").html(data);
        // $(":reset");
        
      },
    });
  
}
