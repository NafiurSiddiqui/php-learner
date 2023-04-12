<?php

//REMEMBER: global variable and fucntional variables are scoped. you can not access to each other. only way you can access to a global variable is with GLOBAL keyword.

$y = 23;

function registerUser($email)
{
    // global $y;
    // echo $y;

    // $functionVar = 'something';
    echo "$email registered.";
}

// echo $functionVar;  //DOES NOT HAVE ACCESS

// registerUser('some@somemail.com');



// RETURN VALUE


function sum($n1 = 4, $n2 = 4)
{
    return $n1 + $n2;
}

// echo sum(5, 5);
// echo sum();


//*-------------------- ARROW

$multiply = fn ($n1, $n2) => $n1 * $n2;


// echo $multiply(9,9);

//* ------ scope

function testScope()
{
    $whatHappens = (int) 5;

    return $whatHappens;
}

// echo testScope();
// echo '<br>';
// echo testScope();

//* ------------- Get function args


function var_args($x = '', $y = '')
{
    echo 'Number of parameters:';
    echo func_num_args();
    echo '<br />';
    $args = func_get_args();
    foreach ($args as $arg) {
        echo $arg.'<br />';
    }
}

var_args('a', 'b');
