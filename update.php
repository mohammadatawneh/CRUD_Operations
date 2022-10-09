
<?php include_once("connect.php") ?>

<?php
  $obj =  json_decode($_GET["q"]);
  $username = $obj->edit_username;
  $id = $obj->id;
  $email = $obj->edit_email;
  $pass = $obj->edit_password;
  $newpass = $obj->edit_newpassword;
// header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST);    
//  extract();
// echo $username . $id . $email . $pass . $newpass;

 $sql = "UPDATE user SET username='$username', email='$email', password='$pass', check_password='$newpass' WHERE id='$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

?>