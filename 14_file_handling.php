<?php

//File handling: abiltiy to RW files on server.

$file = 'extras/users2.txt';

if(file_exists($file)){
    //Additional integer is the number of Bytes of the file.
    // echo readfile($file);

    $handle = fopen($file, 'r') ;

    $contents = fread($handle, filesize($file));

    fclose($handle);

    echo $contents;
}else{
    //if the file does not exist.craetes one.

    $handle = fopen($file, 'w');
    $contents = 'File created by Php'. PHP_EOL. 'And more on the way!';//EOL = Line break

    fwrite($handle, $contents);
    fclose($handle);

}