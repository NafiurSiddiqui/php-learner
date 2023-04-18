<?php

//This is a file for configuring your php projects. There are more than what we talk about here but this is the min you should know.

//*_________ error_reporting


// var_dump(ini_get('error_reporting')); //We see the error

//we can stop seeing the error (NOT RECOMMENDED!)

// ini_set('error_reporting', E_ALL & ~E_WARNING); //We wont see the error.


//*___________________ Display errors

var_dump(ini_get('display_errors'));

// ini_set('display_errors', 0); //This won't show any error in the production site. (RECOMMENDED) instead you will log the errors.


$arr = [1];

echo $arr[1];



//*____ some of the important config you wanna note is

// max_execution time => how long the script should run before it timesout.
//post_max_size => determines how much data can be posted in a request.
//memory_limit => max amount of memory a script can consumes.
//file_uploads => enable/disable
//upload_tmp_dir => where the tmp folder will be during file uploads.
//upload_max_filesize
//default_timezone
//include_path
