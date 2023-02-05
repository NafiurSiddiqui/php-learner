<?php

    //PHP DATE() returns current time of the server.

    $calendar = date("d.m.Y "); //Format can be anything
   
    $time = date("H:i:s "); //Hour, minute, second

    $dweek = date('l ');//Day of the week.

    echo $calendar;
    echo $time;
    echo $dweek;

    //GETTING LOCAL TIME

    date_default_timezone_set("Asia/Dhaka");

     $BdTime = date("H:i:s ");

    echo $BdTime;

    //* There are alos other functions out there

    //CHECK OUT w3Schools/php/date section for more
    
  



?>