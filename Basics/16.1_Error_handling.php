<?php
//THIS KIND OF ERROR IS MORE USED FUNCTIONAL PHP PROGRAMMING. FOR OOP EXCEPTION IS USED.

//NOTE: manually throwing error requires you to use E_USER_* constants not any E_*.

//*CODE
// trigger_error("example error", E_USER_ERROR); //Stops the execution.
trigger_error("example error", E_USER_WARNING);//throws warning but does not stop the script.

// echo "Did it make it?";

//*ENDOFCODE

//NOTE: Always turn off display_errors in production in order to prevent throwing sensitive warning on the screen.

//WE can also handle custom error

//*CODE

function errorHandler(int $type, string $msg, ?string $file = null, ?int $line = null)
{
    //Do something with it. Never echo these out.

    //FOR DEMONSTRATION FOR LEARNING ONLY
    echo $type. ": ". $msg . " in " . $file . " on line ". $line;

    exit;
}

echo $x;

//*ENDOFCODE
