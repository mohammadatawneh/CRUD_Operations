<?php
    $conn = new mysqli("localhost", "root", "", "muhammad_php");

    header("Content-Type: application/json; charset=UTF-8");
// print_r($_POST["limit"]);

    $limit = json_decode($_POST["limit"]);
    print_r($limit);

    $sql = "select id,username ,email from user  LIMIT $limit->limit";
    $result = $conn->query($sql);
    echo '<table>
    <tr>
        <th>id</th>
        <th>Username</th>
        <th>email</th>
    </tr>
    ';
    if($result->num_rows >0){
        while($row = $result->fetch_assoc()){
            echo '
            <tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["username"].'</td>
                <td>'.$row["email"].'</td>
            </tr>
            ';
        }
    }
    echo '</table>';
?>
<head>
<style>
    table {
    width: 100%;
    border-collapse: collapse;
    }

    table, td, th {
    border: 1px solid black;
    padding: 5px;
    }

    th {text-align: left;}
</style>