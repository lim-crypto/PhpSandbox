<?php

$conn = mysqli_connect('localhost', 'root', '');
$dbname='aaaa';
$query = "CREATE DATABASE $dbname";
$result = mysqli_query($conn, $query); 
if($result){
    echo 'successDB';
}else{
    echo 'failedDB';
}
$conn2=mysqli_connect('localhost', 'root', '88135qx3',$dbname);
$table='CREATE TABLE `adminlogs` (
  `id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
';
$t= mysqli_query($conn2,$table);
if($t){
    echo 'successT';
}else{
    echo 'failedT';
}
$insertT="INSERT INTO `adminlogs` (`id`, `uname`, `pword`) VALUES
(1, 'haha', '4e4d6c332b6fe62a63afe56171fd3725')";
$it= mysqli_query($conn2,$insertT);
if($it){
    echo 'successT';
}else{
    echo 'failedT';
}
