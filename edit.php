
<?php include_once("connect.php") ?>

<?php
extract($_POST);

$sql  = "select id, username, email, password, check_password from user where id = $_POST[id]";
$result = $conn->query($sql);
if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){
        echo '<div class="container">
        <!-- <button calss="btn-btn" id="btn-pop">POP UP</button> -->
        <div class="edit">
            <h2>Edit USER</h2>
            
            <form id="form-edit" method="post" onsubmit="update()" > 
                <div class="input">
                    <label for="name">Name</label>
                    <input class="value" type="text" value="'.$row["username"].'" id="edit-name" >
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input class="value" type="email"  value="'.$row["email"].'" id="edit-email" >
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input class="value" type="text"  value="'.$row["password"].'" id="edit-password" >
                </div> 
              
                <div class="input">
                    <label for="newpassword">New Password</label>
                    <input class="value" type="text"  value="'.$row["check_password"].'" id="edit-newpassword" >
                </div>
              
                <input id="btn-btn" class="btn-btn" type="submit" value="Send" name="send" >
                <input type="hidden" id="id" value="'.$row["id"].'">

            </form>    
            <div id="txtHint">Subhan Allah</div>
            
        </div>';
}
}

?>
<div id="txtHint"></div>
<script src="jquery-3.6.1.js"></script>
<script>
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
function update() {
    // alert("Update")
    const id = document.getElementById("id").value ;
    const edit_username = document.getElementById("edit-name").value ;
    const edit_email = document.getElementById("edit-email").value ;
    const edit_password = document.getElementById("edit-password").value ;
    const edit_newpassword = document.getElementById("edit-newpassword").value ;
    // alert(id + edit_username + edit_email + edit_password + edit_newpassword);
    $obj= {"id":id, "edit_username":edit_username, "edit_email":edit_email, "edit_password":edit_password, "edit_newpassword":edit_newpassword} ;
    $myJSON = JSON.stringify($obj); 
    // alert($myJSON );
    var myAjax = new XMLHttpRequest();
        myAjax.onreadystatechange  = function(){
            if(this.readyState = 4 && this.status == 200){
                document.getElementById("txtHint").innerHTML = this.responseText;
                mydisplay();
                // console.log("success");
                // alert("Done Update");
            }else{
                document.getElementById("txtHint").innerHTML = "error is in response text";
                // alert("Not Done Update");
            }
        }
    myAjax.open("GET", "update.php?q=" + $myJSON, true);
    myAjax.send();
    event.preventDefault();
}

</script>




<!-- 
        // xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    // $.ajax( {
    // type: "POST",
    // url: "update.php",
    // data: {
    //         send:edit_send,
    //         username:edit_username,
    //         email:edit_email,
    //         password:edit_password,
    //         newpassword:edit_newpassword,
    //     },
    //     success: function(data, status){
    //         alert(data);
    // },
    // }); -->

   
    