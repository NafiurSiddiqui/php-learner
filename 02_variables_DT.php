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

// echo $has_kids; // Prints out 1 if true. Nothing if 0

// var_dump($has_kids); //Useful in this case;

//String concatenation

// echo $Name.  ' is '. $age. ' Years old' ;

//or

// echo "$Name is $age years old" ;

//--- FOR CONSTANT

define('HOST', 'localhost');
define('DB_NAME', 'my_DB');

echo HOST;
echo DB_NAME;



//* ----- DATA TYPES



