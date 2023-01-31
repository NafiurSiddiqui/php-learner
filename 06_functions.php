<?php

//REMEMBER: global variable and fucntional variables are scoped. you can not access to each other. only way you can access to a global variable is with GLOBAL keyword.

$y = 23;

    function registerUser($email){
        // global $y;
        // echo $y;

        // $functionVar = 'something';
        echo "$email registered.";
    }

    // echo $functionVar;  //DOES NOT HAVE ACCESS

    // registerUser('some@somemail.com');



    // RETURN VALUE


    function sum($n1 = 4, $n2 = 4){
        return $n1 + $n2;
    }

// echo sum(5, 5);
// echo sum();


//-------------------- ARROW

$multiply = fn($n1, $n2) => $n1 * $n2;


// echo $multiply(9,9);