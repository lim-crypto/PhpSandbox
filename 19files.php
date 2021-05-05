<?php
$path="folder/nothing.php";
// // return filename 
// echo basename($path);
// // return filename  without extension
// echo basename($path, '.php');
//return dir name from path
// echo dirname($path);
$file='folder/file.txt';
echo '<br> check if file exist<br>'.file_exists($file); 

echo '<br>get abs path<br>'.realpath($file); 

//is file
echo '<br>check to see if FILE<br> ';
echo is_file($file);    // for file only
echo '<br>';
echo file_exists('folder'); // for folder and file


echo '<br>check if writable<br>'.is_writable($file); 
echo '<br>check if readable<br>'.is_readable($file); 

//get file size  bytes
echo '<br>  file size='.filesize($file).'<br>';//byte(s)

//manipulate file system
//create a directory
//mkdir('testing'); // create folder
//remove directory if empty
//rmdir('testing'); // delete folder 

//copy file
//echo copy('folder/file.txt', 'folder/file2.html'); 
// rename a file
//rename('folder/file2.txt', 'folder/file3.txt');
// delete file 
// unlink('folder/filename');

//write from file to string
//echo file_get_contents($file);
//write string to file
echo file_put_contents($file, 'hello world<br>'); // ouput the filesize and put contents
// $file2=file_get_contents($file);
// $file2.='welcome to php';
// file_put_contents($file, $file2);


// r open file for reading only
$handle=fopen($file,'r');            
$data=fread($handle, filesize($file));
echo '<br>read the data'. $data . '<br>';//ouput hello world
// a open file for writing only  // create a file if not exist
// w open file for writing only // erase the content of the file // create a file if not exist
$handle2=fopen('folder/newfile.txt','a'); 
$txt="hello";
fwrite($handle2,$txt);
$txt="<br>world";
fwrite($handle2,$txt);
fclose($handle2);

$fopen=fopen('folder/newfile.txt','r');
$fread=fread($fopen , filesize('folder/newfile.txt'));
echo $fread;
$handle3=fopen('folder/newfile3.txt','a'); 

























?>
