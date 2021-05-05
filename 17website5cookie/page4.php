<?php 
if(isset($_POST['submit'])){
    $uname=htmlentities($_POST['uname']);
    $pword=htmlentities($_POST['pword']);
    $pword=md5($pword);
   // setcookie('username', $username, time()+3600);  //1hour
    //header('location: page2.php');

$user=['uname' => $uname,'pword'=>$pword];

$user=serialize($user);

setcookie('user', $user, time()+(86400 * 30) );

$user=unserialize($_COOKIE['user']);

//echo $user['name'];
print_r($user);

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
        <input type="text" name="uname"  > <br>
        <input type="password" name="pword"> <br>
        <input type="submit" name="submit">


    </form>
</body>
</html>