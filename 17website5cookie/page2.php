<?php
    setcookie('username', 'jerald', time()+(86400 * 30));  //30days

    //delete or unset
  //  setcookie('username', 'jerald', time()-3600);  //1hour

if(count($_COOKIE)>0){
    echo 'there are'.count($_COOKIE).'cookies<br>';
}else{
    echo'no cookie<br>';
}

if(isset($_COOKIE['username']))
{
echo 'username is set  '. $_COOKIE['username'] .'<br>';
}


