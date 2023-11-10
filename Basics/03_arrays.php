<?php

//*SIMPLE ARRAY

$numbers = [1,2,3,4];

$fruits = array('Apple', 'Oranges') ;

// print_r($numbers);


//*------- ASSOCIATIVE ARRAY


//EXAMPLE 1

$riders = [
    1 => 'jack',
    3 => 'Rossi',
    6 => 'Speedster'
] ;

// echo $riders[6];

//EXAMPLE 2

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

// echo $hex['green'];

//IRL example

$person = [
    'first_name' => 'Yekatsiaryna Pschanichnaya',
    'last_name' => 'Siddiqui',
    'email' => 'vicrottlehead@gmail.com'
] ;

// echo $person['email'] ;


//*------- MULTIDIMENSIONAL ARRAYS


$users = [
   [
     'first_name' => 'Yekatsiaryna',
    'last_name' => 'Siddiqui',
    'email' => 'vicrottlehead@gmail.com'
   ],
   [
     'first_name' => 'Nafiur Rahman',
    'last_name' => 'Siddiqui',
    'email' => 'progatron@gmail.com'
   ],
   [
     'first_name' => 'Someone',
    'last_name' => 'Something',
    'email' => 'whatever@gmail.com'
   ],
] ;


echo $users[2]['email'];

//*A LOT of time we write APIs and we can turn this into JSON format like this.

// var_dump(json_encode($users));
