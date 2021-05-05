<?php 
class Customer{
    private $id;
    private $name;
    protected $email;
    private $balance;
    public function __construct($id, $name, $email, $balance){
        // echo 'the constructor run...';
        $this->id      =$id;
        $this->name    =$name;
        $this->email   =$email;
        $this->balance =$balance;

    }
    public function getEmail(){
        return $this->email;
    }
    //method
    // public function getCustomer($id){
    //     $this->id =$id;
    //     return $this->id;
    // }
    // public function __destruct(){
    //     echo ' the destructor run...';
    // }
}

// $customer= new Customer;
// echo $customer->getCustomer(11);

// $customer= new Customer(1, 'brad  traversy', 'asdSa@sadsd.asd',0);
// echo $customer->name;
// echo $customer->getEmail();  


class Subscriber extends Customer{
    public $plan;
    public function __construct($id, $name, $email, $balance, $plan){
       parent::__construct($id, $name, $email, $balance);
       $this->plan= $plan;

    }
  
}
$subscriber =  new Subscriber(1,'asd', 'asdsa@sadsa.asda',0,'pro');
echo $subscriber->getEmail();

echo '<br>';

class User{
    public $username;
    public $password;
    public static $passwordlength=5;

    public static function getPasswordlength(){
        return self::$passwordlength;
    }
}

 echo User::getPasswordlength();


?>

   <!-- <meta http-equiv="refresh" content="2" >   -->
