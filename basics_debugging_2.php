<?php
// Understanding the Basics: Debugging an Application
// use var_dump(), exit, error_reporting(), and ini_set()

ini_set('display_errors', 0);
error_reporting(E_ERROR);

// 1. turn display of errors on
// NOTE: this should be turned off when done developing your application!
//ini_set('display_errors', 1);

// 2. set error reporting to the highest possible level
//error_reporting(E_ALL | E_STRICT);

// 3. use var_dump($counter);

// 4. wrong data type
// $counter = ' ';

// initial error: counter not showing up
echo 'COUNTER: ' . $counter++;
