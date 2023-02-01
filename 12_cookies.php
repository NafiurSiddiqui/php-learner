<?php

// store data in the remote browser and tracking or identifying return users. You can set specific data to be stored in the browser, then retrieve it when the user visits the site again.

//!DO not use sensitive information like credentials. (e.g - passwords and other sensitive info)

//The value may come from a form or something

// This would set the cookie for 1 day
setcookie('name', 'Eddie', time() + 86400);

// This would set the cookie for 30 days
// setcookie('name', 'Eddie', time() + 86400 * 30);


//The cookie is set inside the browser. we can get the value.


if(isset($_COOKIE['name'])){
    echo $_COOKIE['name'];
}


//removes cookies.
setcookie('name', '', time() - 86400);

