<?php include_once("connect.php") ?>

<?php
    
    extract($_POST);
    
    if(isset($_POST["send"])){
        
        
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $newPassword = $_POST["newpassword"];
        if($username !== "" || $email !== "" || $password !== "" || $newPassword !== ""  ) {
            $stmt = $conn->prepare("INSERT INTO USER ( username , email, password, check_password ) values(?, ?, ?, ? )" );
            $stmt->bind_param("ssss", $username, $email, $password, $newPassword);
            
            if($stmt->execute()){
                echo "the data has been send ";
                $stmt->close();
                $conn->close();
            }
            else {
                echo "occured error";
            }
        }else {
            echo "the data is empty";
        }
      // echo "<h2>" . $name . " " . $email . " "  . $password . " " . $password . "</h2>" ;
    }
?>