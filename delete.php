<?php include_once("connect.php") ?>

<?php
     extract($_POST);
    echo $_POST["id"];
    // sql to delete a record
    $sql = "DELETE FROM user WHERE id= $_POST[id]";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
?>