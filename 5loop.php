<?php
//loops execute code set numbers of times


 /*
for ($i=0; $i <=10;  $i++ )
{
    echo 'number ' . $i ;
    echo '<br>';
}
 */
/*
$i = 0 ;

while($i < 10){
    echo $i;
    echo '<br>';
    $i++;
}

*/

/*
$i = 0;

do{
    echo $i;
    echo '<br>';
    $i++;
}

while ($i<10);

*/

/*
$people = array ('brad', 'jose', 'william');
foreach($people as $person){
    echo $person;
    echo '<br>';


}
*/ 
$people = array ('brad' => 'brad@gmail.com' , 'jose' =>'jose@gmail.com', 'william' =>'will@gmail.com');
foreach($people as $person => $email){
    echo $person.': ' . $email;
    echo '<br>';


} 


 ?>