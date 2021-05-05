<?php
#array- variable that holds multiple values
// indexed
//associative
//multi dimensional



//indexed
$people = array( 'kevin', 'jeremy', 'sara');

//echo $people[1];

$ids = array(23, 55, 12);

//echo $ids [2];

$cars = ['honda', 'toyota', 'ford'];
$cars[3]= 'chevy';
$cars[]= 'bmw'; 
 
//echo $cars[4];
//echo count ($cars);
//print_r($cars);
//var_dump($cars);

//ASSOCIATIVE ARRAYS

$people = array ('brad' => 35, 'jose' => 32, 'william'=>37); 
 echo $people['brad'];
$ids =[22 =>'brad', 44 => 'jose', 63=> 'william'];

echo $ids[22];

$people ['jill'] = 42;
echo $people['jill'];
//print_r ($people);


// MULTIDIMENSIONAL
$cars = array(
    array('honda', 20, 10),
    array('toyota', 30, 20),
    array('ford', 23, 12),
);

echo $cars[1][0];
echo $cars[1][2];
















?>
