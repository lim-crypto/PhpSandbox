<?php



$people[]="apple";
$people[]="banana";
$people[]="cat";
$people[]="dog";
$people[]="elephant";
$people[]="fairy";
$people[]="goat";
$people[]="hotdog";
$people[]="itlog";
$people[]="jerald";
$people[]="key";
$people[]="lim";
$people[]="map";
$people[]="notebook";
$people[]="oven";
$people[]="pen";
$people[]="queen";
$people[]="red";
$people[]="strawberry";






$q=$_REQUEST['q'];

$suggestion="";


if($q !==""){
    $q= strtolower($q);
    $len=strlen($q);
        foreach($people as $person){
            if(stristr($q, substr($person, 0, $len))){
                if($suggestion === ""){
                    $suggestion=$person;
                }else{
                    $suggestion .=", $person";
                }
            }
        }
}

echo $suggestion === "" ? "No Suggestion" : $suggestion;



