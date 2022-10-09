<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <P>button is view 10 users using ajax and json</P>
    <button id="view" onclick="viewUsers(10)">View 10 users </button>
    <div id="txtHint"></div>
    <script>
        function viewUsers(str){
            var obj= {"limit":str};
            const limit = JSON.stringify(obj);
            console.log(limit);
            var myAjax = new XMLHttpRequest();
            myAjax.onreadystatechange  = function(){
                if(this.readyState = 4 && this.status == 200){
                    document.getElementById("txtHint").innerHTML = this.responseText;
                    // console.log("success");
                }else{
                    document.getElementById("txtHint").innerHTML = "error is in response text";
                }
            }
            myAjax.open("POST", "customers.php");
            myAjax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            myAjax.send("limit=" + limit);

    
        }
    </script>
</body>
</html>