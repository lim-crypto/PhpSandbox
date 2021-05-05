<?php



$output = 'hello world';
echo $output. '<br>'; 
$num1 = 4;
$num2 = 10;
$sum = $num1 + $num2;
echo $sum . '<br>';

$float1= 4.4;
$bool1=true;
echo $float1 + $bool1 +$num1 +$sum    . '<br>';
$string1= 'hello';
$string2 = 'world';
$greeting = $string1.' '. $string2  . '<br>';
$greeting2 = "$string1 $string2" . '<br>';

echo $greeting;
echo $greeting2;


$string3 = 'they\'re here' . '<br>';
echo $string3;

define('greetings', 'hello everyone');
echo greetings;

?>