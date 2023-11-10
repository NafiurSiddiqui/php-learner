<?php

/**
 * additional operators
 */

//* ERROR SUPPRESSION OPERATOR

//! THIS DOES NOT SUPPRESS A LOT OF ERROR FROM PHP 8.0.

// $value = 57/0;

// echo $value; //THROWS AN ERROR

$value = @(57/0);

echo $value; //THROWS AN ERROR




//* EXECUTION OPERATOR

# runs a command line command.

$dir = `dir d:`;

// echo "
// <pre>{$dir}</pre>";
