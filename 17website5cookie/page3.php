<?php

$user=['name' => 'lim','email'=>'asd@asd.dsa','age'=>'20'];

$user=serialize($user);

setcookie('user', $user, time()+(86400 * 30) );

$user=unserialize($_COOKIE['user']);

//echo $user['name'];
print_r($user);

?>
