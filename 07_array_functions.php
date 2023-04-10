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

//*------------- Range

/**
 * @param 1 - start
 * @param 2 - end
 * @param 3 - getting odds (optional)
 */



$nums = range(1, 10, 3);

$letters = range('a', 'z', 2);

print_r($nums);
print_r($letters);





//-------------------- ADVANCED

//* OVERRIDING AND DUPLICATION

//Play around with data types of the keys to see the paradox.

// In PHP, when an array is created with keys that are not integers, the keys are automatically cast to either integers or strings based on certain rules. In this case, since the keys in the array $arrTest are a mix of booleans and strings, they will be cast to integers or strings based on the following rules:

// Boolean keys true and false will be cast to integers 1 and 0, respectively.
// String keys that can be cast to integers will be cast to integers.
// String keys that cannot be cast to integers will be used as strings.

$arrTest = [true => 'a', false => 'b', '1'=> null, true => 'd'];

/*
  in this case,

  - true[1] => a
  - false[0] = b
  - '1'[1] = c
  - true[1] = d

  since we have duplicate keys, only the last one is pertained.

 */

// print_r($arrTest);

//* TESTING KEYS

$arrTest2 = [true => 'a', false => 'b', '1'=> null];



// var_dump(array_key_exists('1', $arrTest2));//RETURNS TRUE

// var_dump(isset($arrTest2['1'])); //HERE RETURN FALSE because the value is null.
