<?php 
if(isset($_POST['submit'])){
    $username=htmlentities($_POST['username']);
    setcookie('username', $username, time()+3600);  //1hour
    header('location: page2.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST" >
        <input type="text" name="username"  > <br>
        <!-- <input type="password"> <br> -->
        <input type="submit" name="submit">


    </form>
</body>
</html>