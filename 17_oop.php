<?php

class User
{
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


    public function set_name($name)
    {
        $this->name = $name;
    }

    //GETTER

    public function get_name()
    {
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


class employee extends User
{

    public $title;
    public function __construct($name, $email, $password, $title)
    {
        
        //TO INHERIT FROM PARENT CONSTRUCTOR
        parent::__construct($name, $email, $password);
        // $this->title = $title;
        $this->title = $title;

    }


    public function get_title()
    {
        return $this->title;
    }
}

$employee = new employee('Sara', 'sara@gmail', '1234', 'Manager');

// echo $employee->get_title();

class Food
{
    private string $category;
    private string $parentName;
    private string $name;
    private int|float $price;
    

    public function __construct($name, $category, $price)
    {
        $this->name = $name;
        $this->category = $category;
        $this->parentName = "food";
        $this->price = $price;
    }

    public function get_info()
    {
        return nl2br("Name: {$this->name}\r\nCategory: {$this->category} \r\n Price: {$this->price} \r\n  ParentName: {$this->get_parentName()}\r\n");
    }

    protected function get_parentName()
    {
        return $this->parentName;
    }
}



//*___________ Interface

//A WORKAROUND FOR MULTIPLE INHERITENCE.

interface displayItem
{
    public function showItem(string $text = null);

}

class Pizza extends Food implements displayItem
{



    public function showItem(?string $text = null)
    {
        echo "You ordered a {$text}";
    }
}
echo "<br>";

$italianPizza = new Pizza("Italian Pizza", "Pizza", 23.23);

// echo $italianPizza->get_info();

// $italianPizza->showItem("Italian Pizza");


//*______________ Traits

// GROUP TOGETHER A NUMBER OF FUNCTIONALITIES THAT ANY CLASS CAN USES.
//THIS WAY YOU CAN WORK AROUND IMPLEMENTING MULTIPLE INHERITENCE

trait fileLogger
{
    public function logmessage($message, $level='DEBUG')
    {
        // write $message to a log file
        echo "MESSAGE: {$message}\r\n LEVEL: {$level}<br>";
    }
}
trait sysLogger
{
    public function logmessage($message, $level='ERROR')
    {
        // write $message to the syslog
        echo "MESSAGE: {$message}\r\n LEVEL: {$level}";
    }
}


class fileStorage
{
    use fileLogger, sysLogger
    {
        fileLogger::logmessage insteadof sysLogger; //`insteadof` is used to specifically mention which method you wanna use.
        sysLogger::logmessage as private logsysmessage; // `as private` renaming the method.
    }
    public function store()
    {
        $data = ['fileLog'=> 'From file logger', 'sysLog'=> 'From system logger'];

        $this->logmessage($data['fileLog']);
        $this->logsysmessage($data['sysLog']);
    }
}

// $file_some = new fileStorage();

// $file_some->store();




//* ------------ Late static binding

class A
{
    public static function whichclass()
    {
        echo __CLASS__;
    }

    public static function test()
    {
        // self::whichclass();
        static::whichclass();
    }
}

class B extends A
{
    public static function whichclass()
    {
        echo __CLASS__;
    }
}

// A::test();//A
// B::test();//A without `late static binding`

//Toggle static call on A to call the funcion on B on runtime. Not from memory.



//---------STD CLASS (OBJ)


$jsData = '{"a":1, "b": 2, "c":3}';
// $jsData2 = '{"a":1, "b": 2, "c":3}';

$newAssocArr = json_decode($jsData, true);// True = ASSOC_ARR
$std = json_decode($jsData); //now this is an STD CLASS

// var_dump($newAssocArr['a']); //ASSOC_ARRAY
// var_dump($std->a); //OBJ


//CREATE CUSTOM OBJ

//Manual creation of object in PHP

$home = new \stdClass();

$home->color = 'skyblue';
$home->rooms = ['bedroom', 'living room'];

// var_dump($home);


//TYPE CASTING

$arr = [1,2,3,4];

$arrToObj = (object) $arr;


// var_dump($arrToObj);
// var_dump($arrToObj->{2}); //ACCESSING OBJ PROPS



//NULLSAFE OPERATOR

//if we have three class - PaymentProfile, Customer, Transaction

class PaymentProfile
{
    public int $id;

    public function __construct()
    {
        $this->id = rand();
    }
}


class Customer
{
    public ?PaymentProfile $paymentProfile = null;
    //? means that this is nullable type

}


//CONSTRUCTOR PROPERTY PROMOTION

class Transaction
{
    private ?string $description = null; //CLASS PROP
    public ?Customer $customer = null;
    //Allows you to directly init and assign property in the constructor.
 

    public function __construct(
        private float $amount, //PROMOTED PROP
        ?string $description
    ) {
        /**
         * This way we do not have to init a class prop and the assing the value from here.
         * you can combine class and promoted prop together.
         */

        $this->description = $description;

        //ACCESS: either by `this` or direct variable.
     
        // var_dump($amount); //works
        // var_dump($this->amount);//works
    }

}

$transaction = new Transaction(5.00, null);

// echo $transaction->customer->PaymentProfile->id; //Customer is null, get error

echo $transaction->customer?->paymentProfile?->id;

//NOTE: in this case we can use NULL Coalescing operator as well

echo $transaction->customer?->paymentProfile?->id ?? "Alright!";

//But in some cases,like on methods(), null coalescing does not work. In that scenario, we can use Nullsafe operator.
