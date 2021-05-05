<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
    function showSuggestion(str){
        if(str.length==0){
            document.getElementbyId('output').innerHTML='';
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange= function(){
                if(this.readyState == 4 && this.status == 200){
                    document.getElementById('output').innerHTML = this.responseText;
                }
            }
            xmlhttp.open("GET", "suggest.php?q="+str,true);
            xmlhttp.send();
        }
    }
    </script>
</head>
<body>
    <div class="container">
    <h1>search users</h1>
    <form> 
    search users : <input type="text" class="form-control" onkeyup="showSuggestion(this.value)" >
    </form>
    <p> suggestions: <span id="output" ></span></p>
    </div>
</body>
</html>