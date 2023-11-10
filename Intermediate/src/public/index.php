<?php

require __DIR__ . '/../vendor/autoload.php';


// echo "HOME ( Public ) dir";

$routes = new App\Routes();
$test = new \App\test\Test();

$routes->test();
echo '<br/>';
$test->printTest();
