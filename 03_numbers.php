<?php

// Declaring numbers
echo"Declaring numbers".'<br>';
$a = 8;
$b = 7;
$c = 9.1;
$d ='name';
//output
echo $a;
echo $b;
echo $c;
echo ''.'<br>';

// Arithmetic operations
echo"Arithmetic operations".'<br>';
echo $a + $c.'<br>';
echo $a - $b.'<br>';
echo $a * $c.'<br>';
echo $a / $c.'<br>';
echo $a % $c.'<br>';
echo ''.'<br>';


// Assignment with math operators
echo"Assignment with math operators".'<br>';
$a += $b; echo $a.'<br>';
$a -= $b; echo $a.'<br>';
$a *= $b; echo $a.'<br>';
$a /= $b; echo $a.'<br>';
$a %= $b; echo $a.'<br>';
echo ''.'<br>';


// Increment operator
echo"Increment operator".'<br>';
echo $a++.'<br>';
echo ++$a;
echo ''.'<br>';


// Decrement operator
echo"Decrement operator".'<br>';
echo $b--.'<br>';
echo --$b;
echo ''.'<br>';


// Number checking functions
echo"Number checking functions".'<br>';
var_dump(is_float($a));
var_dump(is_integer($b));
var_dump(is_numeric($d));
echo ''.'<br>';
echo ''.'<br>';

// Conversion
echo"Conversion".'<br>';
$strNumber = '12.34';
$number = (int)$strNumber;
var_dump($number);
echo ''.'<br>';
echo ''.'<br>';


// Number functions
echo"Number functions".'<br>';
echo "abs(-15).......". abs(-15).'<br>';
echo "pow(2,3).......". pow(2,3).'<br>';
echo "sqrt(16).......". sqrt(16).'<br>';
echo "max(2,7).......". max(2,7).'<br>';
echo "min(2,4).......". min(2,4).'<br>';
echo "round(2.4).......". round(2.4).'<br>';
echo "round(2.9).......". round(2.9).'<br>';
echo "floor(2.6).......". floor(2.6).'<br>';
// ceil is the opposite of floor
echo "ceil(2.6).......". ceil(2.6).'<br>';
echo ''.'<br>';
echo ''.'<br>';


// Formatting numbers
echo"Formatting numbers".'<br>';
$number = 1234567.890;
echo number_format($number);
echo ''.'<br>';
echo ''.'<br>';

// https://www.php.net/manual/en/ref.math.php
