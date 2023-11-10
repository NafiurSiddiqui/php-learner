<?php

session_start();

//You can also remove the variables

session_unset();

//Destroy
session_destroy();


header('Location: ../13_sessions.php ');