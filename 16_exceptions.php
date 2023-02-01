<?php

/**
 * PHP exception model. An exception that can be thrown, and caught within PHP. Perhaps, surrounding by try block to catch a potential exceptons. Each try must have at least one corresponding catch or finally block.
 */

 function inverse($x){

    if(!$x){
        throw new Exception('Division by Zero');
    }
     return 1/$x;
 }


//  echo inverse(0); //BREAKS THE SCRIPT

 try {
    //code...
    echo inverse(5);
    echo inverse(0);
 } catch (Exception $e) {
    
    echo 'Caught Exception', $e->getMessage(), ' ';
 }finally{
    //when we need to execute anyway after first error.
    echo 'First finally.';
 }

 //NOW SCRIPT DOES NOT BREAK
 echo 'Hello World';
 