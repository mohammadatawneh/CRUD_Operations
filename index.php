<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="jquery-3.6.1.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body onload="mydisplay()">
    <div class="container">
        
        <div class="create">
            <h2>Create Account</h2>
            
            <form id="form-create"  method="post" > 
                <div class="input">
                    <label for="name">Name</label>
                    <input class="value" type="text" name="name" id="name" >
                </div>
                <div class="input">
                    <label for="email">Email</label>
                    <input class="value" type="email" name="email" id="email" >
                </div>
                <div class="input">
                    <label for="password">Password</label>
                    <input class="value" type="password" name="password" id="password" >
                </div> 
              
                <div class="input">
                    <label for="newpassword">New Password</label>
                    <input class="value" type="password" name="newpassword" id="newpassword" >
                </div>
              
                <input class="btn-btn" id="send" type="submit" value="Send" name="send" >
            </form>    
            
            <div id="result"></div>
        </div>
    </div>
    <div id="update"></div>
    <div id="demo">HEllo</div><br><br><br>  
    <div id="display_1"></div>
    
    
    <script>
      
    </script>
    <!-- <script src="jquery-3.6.1.js"></script> -->

    <script src="js/create.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>