<?php

$string = 'Hello World';


//*------- Length

// echo strlen($string);

//*------ index of first occurance

// echo stripos($string, 'e');

//*------ index of last occurance

// echo strrpos($string, 'l');

//*------ Reverse

// echo strrev($string);

//*----- To lower case

// echo strtolower($string);

//*----- To upper case

// echo strtoupper($string);

//*------ uppercase of firt char each word

// echo ucwords($string);

//*---- Replace

// echo str_replace('World', 'Fellas', $string);

//*---- Returns portion of the string specified by the offest and length

// echo substr($string, 0, 5);
// echo substr($string, 5);


//*------ starts with

// echo str_starts_with($string, 'Trello'); // return 1 or nothing.

//*--------- ends with

// echo str_ends_with($string, 'ld');


//*-------- Security

//in a case where someone puts a script tag inside HTML, you can prevent them by wrapping it with the method below

$string = '<script> alert("hacker alert") </script>';

// echo $string; // runs the script

// echo htmlspecialchars($string); //parses as HTML


// printf('%s likes to %s', 'Eddie', 'Code');
//%s = the format you know from C.

// printf('5+5=%d', 5 + 5);


//*------------ Tokeinization ( strtok )

//Splits stings into separate part.

$feedback = "Your Delivery service is excellent!";
    

$token = strtok($feedback, " ");



while ($token != "") {
    // echo $token."<br />";
    $token = strtok(" ");
}


//*------------------ stristr, strstr

//Searches for particular word in a string.


/**
 *  strstr - case-sensitive
 * stristr - not case-sensitive
 */

// Change the $toaddress if the criteria are met
if (stristr($feedback, 'shop')) {

    echo "Needs to go to retailer";
} elseif (stristr($feedback, 'delivery')) {
    echo "Needs to go to delivery!";

} elseif (stristr($feedback, 'bill')) {
    echo "Needs to go to Accounting dept.";

}

// echo $toaddress;


