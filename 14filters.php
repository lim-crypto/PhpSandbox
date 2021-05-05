<?php 

 // check for posteddata
 /*
 if(filter_has_var(INPUT_POST, 'data'))
    {
        echo 'data found';
    }   else {
        echo 'no data';
    }



 */

 /*
if(filter_has_var(INPUT_POST, 'data'))
{     $email =$_POST['data'];
    // remove illegal chars
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br>';
      if(filter_var( $email, FILTER_VALIDATE_EMAIL)){
           echo 'email is valid';
            } else { 
        echo 'Email is NOT valid';
}
   
} 

 
*/

/*

$var ='2a';

if ( filter_var ($var,FILTER_VALIDATE_INT))
{
    echo $var. 'is a number';
} else {
    echo $var. 'is not a number';
}

*/

//$var = '546asd1a32s1d65a';
//var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));
//echo $var;
//$var='<script> alert(1)</script>';
// echo filter_var($var,Filter_SANITIZE_CHARS);


/*
$filter= array(
    "data"=> FILTER_VALIDATE_EMAIL,
    "data"=> array(
        "filter"=> FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
    )
        );
        print_r(filter_input_array(INPUT_POST, $filter));

*/

$arr =array(
    "name"=> "brad traversy",
    "age"=> "35",
    "email"=> "brad@gmail.com",

);

$filters=array(
    "name"=> array(
        "filter"=> FILTER_CALLBACK,
        "options"=> "ucwords"
    ),


    "age"=>array(
        "filter" => FILTER_VALIDATE_INT,
        "option"=> array(
            "min_range"=>1,
            "max_range"=>120
        )
        ),
        "email"=>FILTER_VALIDATE_EMAIL
    );

print_r(filter_var_array($arr,$filters));




?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<input type="text" name="data" >
<input type="text" name="data2" >
    <button type="submit" >Submit</button>

</form>