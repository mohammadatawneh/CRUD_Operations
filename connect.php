<?php
    $conn = new mysqli("localhost", "root", "", "muhammad_php");

    // if($conn->connect_error){
    //     echo "error in the connection: " . $conn->connect_error ;
    // }else {
    //     echo "connected successfully";
    // }
    /* $conn->close(); */// it must be in last page because before come $stst->colse after $sts->execute()    
?>