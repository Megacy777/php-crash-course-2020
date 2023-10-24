<?php

// What is a variable

// Variable types (8)

// >>>>> string 
// >>>>> integer 
// >>>>> float 
// >>>>> boolean
// >>>>> NULL
// >>>>> Array
// >>>>> Object
// >>>>> Resource


// Declaration of variables
$name = 'Mamgaya';
$age = 27;
$isFemale = true;
$salary = Null;
$height = 17.5;

// Print the variables. Explain what is concatenation
echo $name.'<br>';
echo $age.'<br>';
echo $isFemale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

echo ".............".'<br>';

// Print types of the variables

echo "Print types of the variables".'<br>';
echo gettype($name).'<br>';
echo gettype($age).'<br>';
echo gettype($isFemale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';

echo ".............".'<br>';
echo ''.'<br>';

// // Print the whole variable
echo "Print the whole variable".'<br>'; 
// ----- >>>>>>> variables in php don't have types the values assigned have types
echo "NB:variables in php don't have types the values assigned have types".'<br>';
var_dump($name).'<br>';
var_dump($salary).'<br>';
var_dump($age).'<br>';
var_dump($isFemale).'<br>';
var_dump($height).'<br>';

echo ".............\n".'<br>';
echo ''.'<br>';
// Change the value of the variable
echo "Change the value of the variable".'<br>';
$name = 17.8;
echo $name.'<br>';

echo "..............\n".'<br>';
echo ''.'<br>';
// Print type of the variable


echo ".............".'<br>';
echo ''.'<br>';

// Variable checking functions
echo " Variable checking functions".'<br>';
var_dump(is_string($name));
echo ''.'<br>';
var_dump(is_float($name));

echo ".............".'<br>';

echo ''.'<br>';
// Check if variable is defined
echo "Check if variable is defined".'<br>';
var_dump(isset($address));
// echo $address;
echo ''.'<br>';
echo ".............".'<br>';


echo ''.'<br>';

// Constants
echo 'Constant'.'<br>';
define('PI',3.14);
echo PI;

echo ''.'<br>';
echo ".............".'<br>';


// Using PHP built-in constants
echo "Using PHP built-in constants".'<br>';
echo PHP_INT_MIN;
echo ''.'<br>';
echo PHP_INT_MAX;
echo ''.'<br>';
echo ".............".'<br>';
?>