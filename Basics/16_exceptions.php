<?php

/**
 * Exception is a class.
 * Exception class have a bunch of built-in methods. Like - getFile(), getCode(), getMessage(), etc.
 *  Each try must have at least one corresponding catch or finally block.
 * Exception must be thrown manually. with `throw new Exception($message, $code)` statement.
 */

function inverse($x)
{

    if(!$x) {
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
   
    //  echo ' Caught Exception', $e->getMessage(), ' ';
    $msg = $e->getMessage();
    $code = $e->getCode();
    $line = $e->getLine();
   
    echo "Caught exception on line $line with $code . Message: $msg ";
} finally {
    //when we need to execute anyway after first error.
    echo '<br> First finally.';
}

//NOW SCRIPT DOES NOT BREAK
echo '<br> Hello World';
 

//*____________ USER DEFINED EXCEPTION

//In some cases you might want to extend the base Exception class and have your won Exception. Note that only `__toString()` method is overrideable from the original Exception class.
