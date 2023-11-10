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

// var_args('a', 'b');

//*----------- More on scope


function funk()
{
    echo 'inside the function, at first $var = '.$var.'<br />'; //has no access to globall var
    $var = 2;
    echo 'then, inside the function, $var = '.$var.'<br />'; //has access to local
}
$var = 1;

// funk();

// echo 'outside the function, $var = '.$var.'<br />';


//*------------ param by ref or value


//BY VALUE

function increment($value, $amount = 1)
{

    $value = $value + $amount; //will never point to the global var.
}

$value = 10;
increment($value);
// echo "{$value} <br>"; //remains unchanged


//By ref
function increment2(&$value, $amount = 1)
{

    $value = $value + $amount; //now points to the global var.
}

$value = 10;
increment2($value);
// echo $value; //changes

//*----------- Recursion PHP


function reverse_r($str)
{
    if (strlen($str)>0) {
        reverse_r(substr($str, 1));
    }
    echo substr($str, 0, 1);
    return;
}

function reverse_i($str)
{
    for ($i=1; $i<=strlen($str); $i++) {
        echo substr($str, -$i, 1);
    }
    return;
}
reverse_r('Hello');
echo '<br />';
reverse_i('Hello');
