<?php
    $conn = new mysqli("localhost", "root", "", "muhammad_php");
    $sql = "select id,username ,email from user ";
    $text= '<form action="">
    <select name="users" onchange="showUser(this.value)">';

    $result = $conn->query($sql);
    if($result->num_rows > 0 ){
        while($row = $result->fetch_assoc()){
            $text .= '<option value="'.$row["id"].'">'.$row["username"].'</option>';
        }
    }
    $text .= '</select>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <?php 
        echo $text;
        ?>
    </div>
        
    <div id="txtHint">

    </div>
    </form>
    <script>
    function showUser(val){
        if(val == ""){
            document.getElementById("txtHint").innerHTML = "";

        } else {
            var myAjax = new XMLHttpRequest();
            myAjax.onreadystatechange  = function(){
                if(this.readyState = 4 && this.status == 200){
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    // console.log("success");
                }else{
                    document.getElementById("txtHint").innerHTML = "error is in response text";
                }
            }
            myAjax.open("GET", "getuser.php?q="+val, true);
            myAjax.send();


        }
    }
        
    </script>
</body>
</html>