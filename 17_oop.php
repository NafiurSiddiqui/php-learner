<?php

class User {
    //properties are attributes that belong to a class
    //ACCESS Modifiers: public, private, protected
    //--PUBLIC: can be accessed from anywhere
    //--PRIVATE: only be accessed from inside the class
    //-- PROTECTED: only be accessed from inside the class and inheriting classes.
    public $name;
    public $email;
    public $password;

    //Constructor runs when OBJ is created

    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

    }


    function set_name($name){
        $this->name = $name;
    }

    //GETTER

    function get_name(){
        return $this->name;
    }

}

//Instantiate

$user1 = new User('Eddie', 'Ed@gmail.com', '12344');
$user2 = new User('Katya', 'Katya@gmail.com', '3455');

// $user1->name = 'Eddie';

// $user1->set_name("Eddie");
// $user2->set_name("Katya");


// var_dump($user1);
// var_dump($user2);
// echo $user1->email;

// echo $user2->get_name();




//------------ Inheritence


class employee extends User{

    public $title;
    public function __construct($name, $email, $password, $title)
    {
        
        //TO INHERIT FROM PARENT CONSTRUCTOR
        parent::__construct($name, $email, $password);
        // $this->title = $title;
        $this->title = $title;

    }


    public function get_title(){
        return $this->title;
    }
}

$employee = new employee('Sara', 'sara@gmail', '1234', 'Manager');

echo $employee->get_title();


