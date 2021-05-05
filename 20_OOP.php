<?php

class Person{
    private $name;
    private $email;
    public static $ageLimit=40;
    private static $ageLimit2=40;

    public function __construct($name,$email){
        echo  __CLASS__.' created<br>';
        $this->name=$name;
        $this->email=$email;
    }

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name.'<br>';
    }
    public function setEmail($email){
        $this->email=$email;
    }

    public function getEmail(){
        return $this->email.'<br>';
    }
    public static function getAgeLimit(){
        return self::$ageLimit2;
    }
}
// $person1= new Person;
// $person1->setName('johndoe');
// echo $person1->getName();


//  $person1->name='john doe';
// echo $person1->name;



//$person1= new Person('johndoee', 'asdsa@ASDAS.ASD'); 


// echo $person1->getName();

echo Person ::$ageLimit;
echo Person ::getAgeLimit();


class Customer extends Person{
    private $balance;

    public function __construct($name, $email, $balance){
        parent::__construct($name, $email, $balance);
        $this->balance=$balance;
        echo 'A new'.__CLASS__.'has been created<br>';
    }
    public function setBalance($balance){
        $this->balance=$balance;
    }
    public function getBalance(){
        return $this ->balance.'<br>';
    }

}

// $customer1= new Customer('john doe', 'jfoasd@sa.a', 421);
// echo $customer1->getBalance();

 