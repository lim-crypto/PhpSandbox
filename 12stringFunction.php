<?php


//$output = substr('hello',1,3);    
                                // output  ell
//$output = substr('hello',-1);
                                // o
//echo $output;
            

//$output = strlen('hello world');
                                // 11
//echo $output;


//$output = strpos ('hello world', 'o');
                                // 4
//echo $output;


//$output = strrpos ('hello world', 'o');
                                // 7
//echo $output;


//$text = 'hello world              ';
//var_dump($text);
                        // 25  hello world              
//$trimmed = trim($text);
                        // 11 hello world 
//var_dump($trimmed);



//$output = strtoupper('Hello world');
                        // HELLO WOLRD
//echo $output;

//$output = strtolower('Hello world');
                        // hello world
//echo $output;

//$output = ucwords('Hello world ');
                        //Hello World
//echo $output;


//$text = 'hello world';
//$output= str_replace ('world', 'everyone', $text);
//echo $output;          // hello everyone

//$val='hello';

//$output=is_string($val);
//echo $output;         //1 (true)

/*
$values = array(true, false, null, 'abc', 33, '33',22.4,'22.4','',' ',0,'0' );

foreach($values as $value){
    if (is_string($value)){
        echo "{$value} is a string<br>";
    }
}



*/





$string =" Lorem ipsum, dolor sit amet consectetur adipisicing elit. Fugiat et rem reiciendis quasi fuga dolorem iste iure aliquid nostrum libero velit, harum sapiente earum rerum alias, laboriosam sunt blanditiis excepturi!";

$compressed = gzcompress($string);
echo$compressed;
  $original = gzuncompress($compressed);
echo $original;  

 
