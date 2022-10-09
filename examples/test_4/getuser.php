
<!DOCTYPE html>
<html>
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
</head>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "muhammad_php");

    $val = intval($_GET["q"]);

    $sql = "select id,username ,email from user where id = $val";
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
</body>
</html>