<?php


    //start the session (If this is where the session is used)

    session_start();


    if(isset($_SESSION['username'])){
        echo '<h1> Hello '.$_SESSION['username']. '</h1>';

        echo '<a href="logout.php">Log out</a>';
    }else{
        echo "<h1>Hello Guest!</h1>";
        echo '<a href="../13_sessions.php" > Home </a>';

    };
