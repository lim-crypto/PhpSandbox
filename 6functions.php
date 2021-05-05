<?php
/*
camel case- myFunction()
lowercase- my_function()
pascal case- MyFunction()
*/
function simpleFunction(){
echo 'hello world'; 
}
simpleFunction();

// function with parameter
function sayHello($name ="world"){
echo "hello $name <br>";

}

sayHello('joe');
sayHello();

function addNumbers ($num1, $num2){
    echo $num1 + $num2;

}
addNumbers ( 2 , 3);
echo "<br>";
function addNumbers2 ($num1, $num2){
    return $num1 + $num2;

}
echo addNumbers2 ( 2 , 3);

echo "<br>";






$myNum =10;

function addFive($num) //didnt add five
{$num += 5;
}
function addTen (&$num) // add if has &
{ $num+=10;
}
addFive ($myNum);
echo "Value: $myNum <br>";
addTen ($myNum);
echo "value: $myNum   <br>"; 




function  a($a)
{
  echo  $a ;
}

a(11);
a("ASd");



// define('A','echo ');
//   A; 13;

?>
