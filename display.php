<?php include_once("connect.php") ?>

    <style>
        .container {
            max-width:80%;
            padding:50px;
            /* text-align:center; */
        }
    </style>
    <div class="container">
        <table class="table table-hover  table-success">
            <thead>
                <tr>
                  <th>ID</th>
                  <th>username</th>
                  <th>Email</th>
                  <th>password</th>
                  <th>Checked Password</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql  = "select id, username, email, password, check_password from user";
                    $result = $conn->query($sql);

                    if($result->num_rows > 0 ){
                        while($row = $result->fetch_assoc()){
                            echo' 
                            <tr>
                            <td>'.$row["id"].'</td>
                            <td>'.$row["username"].'</td>
                            <td>'.$row["email"].'</td>
                            <td>'.$row["password"].'</td>
                            <td>'.$row["check_password"].'</td>
                            <td>
                            <span id="edit" data="edit('.$row["id"].')" onclick="edit('.$row["id"].')" class="material-symbols-outlined">edit_square</span>
                            <span id="delete" onclick="del('.$row["id"].')" class="material-symbols-outlined">delete</span>
                            
                            </td>
                            </tr>
                            ';
                        }
                    }
                    ?>
            </tbody>
            <!-- script -->
        </table>
        
    </div>
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
    function del(id){
    // console.log(id);
    $.ajax( {
    type: "POST",
    url: "delete.php",
    data:{
      id:id
    },
    success: function(data, status){
      console.log(data); 
      mydisplay();
    //   console.log(status);
        // $("#display_1").html(data);
        // $(":reset");
        
      },
    });
    }
</script>