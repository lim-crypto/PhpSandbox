<?php

/*
comparison operators
==    equals to value
===   equals to values and data type     identical
<     less than
>     greater than
<=    less than or equal 
>=   greater then or equal
!=   not equal
!==  not identical

*/

/*
$num = 4;
if ($num == 5){
    echo '5 passed';
} elseif ($num == 6){
    echo '6 passed';
}
else { 
    echo 'did not pass';
}


*/
//nested if
/*  
$num = 6 ;
if ($num > 4){
    if($num < 10) {
        echo "$num passed";
    } else { echo 'what ever';}
}
*/


//logical operators
/* and &&     both true
    or ||     1 true
    xor       1 true  but not both
*/
/*
$num = 6;

 if ($num > 4 XOR $num < 10 )
 {
     echo "$num passed";
 }

*/




$favColor ='blue';

switch ($favColor) {
    case 'red':
        echo 'your favColor is red';
        break;
     case 'blue':
        echo 'your favColor is blue';
        break;
     case 'green':
        echo 'your favColor is green';
        break;
    
    default:
    echo 'your favColor is  somethind else';
        break;
}








?>