<?php

//File handling: abiltiy to RW files on server.

/**
 * @mode - A = append, R = Read, W = write
 */

$file = 'extras/existential.txt';

if(file_exists($file)) {
    //Additional integer is the number of Bytes of the file.
    // echo readfile($file);
    $handle = fopen($file, 'r') ;

    $contents = fread($handle, filesize($file));

    fclose($handle);

    echo $contents;
} else {
    //if the file does not exist.craetes one.

    $handle = fopen($file, 'w');
    $contents = 'File created by Php'. PHP_EOL. 'And more on the way! ';//EOL = Line break

    fwrite($handle, $contents);

    $anotherContent = 'Non existensial existence';
    fwrite($handle, $anotherContent);
    fclose($handle);

}


// * Always close the file afterwards.
