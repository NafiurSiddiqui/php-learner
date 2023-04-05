<!-- Vars -->

<?php



// --------------- Rules for PHP variables:

// -A variable starts with the $ sign, followed by the name of the variable
// -A variable name must start with a letter or the underscore character
// -A variable name cannot start with a number
// -A variable name can only contain alpha-numeric characters and -underscores (A-z, 0-9, and _ )
// -Variable names are case-sensitive ($age and $AGE are two different variables)

$Name = 'Nafi';
$age = 31;
$has_kids = true;
$cash_stored = 2000.59;

$boolType = (bool)'';

// echo var_dump($boolType);


// echo $has_kids; // Prints out 1 if true. Nothing if 0

// var_dump($has_kids); //Useful in this case;

//String concatenation

// echo $Name.  ' is '. $age. ' Years old' ;

//or

// echo "$Name is $age years old" ;

//*--- CONSTANT vars

define('HOST', 'localhost');
define('DB_NAME', 'my_DB');




// echo HOST;
// echo DB_NAME;



//* Type Casting

$itemQty = (int) 5;
$itemTotal = (float) $itemQty;

// echo var_dump($itemQty);
// '<br>';
// echo var_dump($itemTotal); //Only the $itemTotal type changed. Not the Qty.
// '<br>';


//* variable varialbes

// echo $itemQty. '<br>'; //5

// $newItemQty = 'itemQty';

// $$newItemQty = 7;

// echo $itemQty.'<br>'; //7


//* Superglobals

// $_GET - Contains information about variable passed through a URL or a form

// $_POST - Contains information about variable passed through a form.

// $_SERVER - Infromation about the server environment.

// $_REQUEST - inforamtion about the vars possed through the

// $_FILES - Information about files uploaded to the script.

// $_ENV - Contains information about the environment variables.

// $_COOKIE - information about cookies.

// $_SESSION - conatins information about variable passed through a session.


// var_dump($_COOKIE);


//* Reference operator

$a = 5;
$b = $a; //a copy of $a is made
// $b = &$a; //both pointing to the same block of memory.



$a = 7; //changing a does not affect B unless we user ref operator.

// $b = $a;

// echo var_dump($a) . '<br>' ;
// echo var_dump($b) . '<br>' ;
