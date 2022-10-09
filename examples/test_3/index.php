<html>
<head>
<script>
function showHint(str) {
 if(str == ""){
    document.getElementById("txtHint").innerHTML = "";

 } else {
    var myAjax = new XMLHttpRequest();
    myAjax.onreadystatechange  = function(){
        if(this.readyState = 4 && this.status == 200){
            document.getElementById("txtHint").innerHTML = this.responseText;
            // console.log("success");
        }else{
            document.getElementById("txtHint").innerHTML = "error is in response text";
        }
    }
    myAjax.open("GET", "search.php?q="+str, true);
    myAjax.send();


 }
}
</script>
</head>
<body>

<p><b>Start typing a name in the input field below:</b></p>
<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="showHint(this.value)" >
</form>
<p>Suggestions: <span id="txtHint"></span></p>
</body>
</html>