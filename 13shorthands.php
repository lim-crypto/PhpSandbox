<?php

$loggedIn  =false;
$arr =[1,2,3,4,5];
/*
if ($loggedIn){
echo 'you are logged in';
} else {
    echo ' you are NOT logged in';
}

echo ($loggedIn)? 'you are logged in': 'you are NOT logged in';


*/


/*
$isRegistered = ($loggedIn == true) ? true : false;
echo $isRegistered;


$age = 20;
$score=15;

echo 'your score is :' .($score > 10 ? ($age > 10 ? 'average:' :'exceptional'):($age >  10 ? 'horrible':'average'));
*/



?>



<div>

<?php if ($loggedIn) {    ?>
        <h1> welcome user</h1>
<?php } else { ?>
        <h1>welcome Guest</h1>
<?php } ?>
</div>



<div>
<?php if ($loggedIn): ?>
<h1>Welcome User</h1>
<?php else: ?>
<h1>Welcome Guest</h1>
<?php endif ; ?>
</div>


<div>

<?php foreach($arr as $val):?>
<?php echo $val; ?>
<?php endforeach; ?>

</div>





