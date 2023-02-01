<?php


    //start the session (If this is where the session is used)

    session_start();


    if(isset($_SESSION['username'])){
        echo '<h1> Welcome you '.$_SESSION['username']. '</h1>';
    }else{
        echo "<h1>Hello Guest!</h1>";
        echo '<a href="/Php-Traversy/13_sessions.php" > Home </a>';

    };
