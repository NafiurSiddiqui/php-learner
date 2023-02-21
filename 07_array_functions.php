<?php

$fruits = ['apple', 'orange', 'banana'];


//*----------GET LENGTH

// echo count($fruits);


//*---------SEARCH ARRAY

// var_dump(in_array('orange', $fruits));


//*------ ADD TO ARRAY

$fruits[] = 'grape';

//or we  can push

array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');


//*------- REMOVE from array

//LAST ITEM
array_pop($fruits);

//BEGINNING

array_shift($fruits);

//Certain Index and value

unset($fruits[2]); //THIS REMOVES INDEX AS WELL.

// print_r($fruits);

//*--------- breaking into chunks

$chunked_array = array_chunk($fruits, 2);

// print_r($chunked_array);


//*-------- CONCAT ARRAY

$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$arrMerged = array_merge($arr1, $arr2);
$arr4 = [...$arr1, ...$arr2];

// print_r($arrMerged);
// print_r($arr4);


//*--------- COMBINE

$a = ['green', 'red', 'yellow'];
$b = ['Guava', ' pommegranate', 'banana'];

$c = array_combine($a, $b);

// print_r($c);

//*------- Array of KEYS

$keys = array_keys($c);

// print_r($keys);



//*------------ FLIP array
//key becomes values, value becomes key

$arrFlipped = array_flip($c);

// print_r($arrFlipped); 

//*------------------ array of numbers

$arrNumbers = range(1, 20); //FILSS in the array with these numbers

// print_r($arrNumbers);

//*----------------- Map arrays

$newNumbers = array_map(function ($number) {

    return "Number $number";
}, $arrNumbers);

// print_r($newNumbers);

//*--------------- Filter

$lessThan10 = array_filter($arrNumbers, fn ($number) => $number < 10);

// print_r($lessThan10);


//*--------------- REDUCE

$sum = array_reduce($arrNumbers, fn ($carry, $number) => $carry + $number);

// var_dump($sum);
