<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body onload = "mydisplay()" >

    <div id="demo"></div>
    <script>
        function mydisplay(){
            const ajax = new XMLHttpRequest();
            ajax.onload = function(){
                const myObj = JSON.parse(this.responseText)
                document.getElementById("demo").innerHTML = myObj.name;
            }
            ajax.open("GET", "using_json.php");    
            ajax.send();
        }
    </script>
</body>
</html>