<?php
// Function with 
function names(){
    echo 'what is a name :) aiseehh'.'<br>';
} 
names();


// Function with argument
function student($name){
    echo 'what is your name '.$name.'<br>';
} 
student("Margaretha");


// Create sum of two functions
function sum($a,$b){
    echo $a + $b;
}
$total = sum(5,6);
echo ' is the total '.$total.'<br>';


// Create function to sum all numbers using ...$args
function summation(...$numbers)     //... creates an array
{
    echo'<pre>';
    var_dump($numbers);
    echo'</pre>';
}
summation(45,54,4,3,2,4);


function summon(...$numbers)     //... creates an array
{
    $sum = 0;
    foreach($numbers as $num) $sum += $num;
    return $sum;
}
$sum = summon(4,5,4,3,2,4);
echo $sum.'<br>'; 

// Arrow functions
function sum_array(...$nums)
{
// in various scenarios where you need to iteratively apply a callback function to elements
// of an array to derive a single value, such as calculating the product, maximum or minimum,
// or performing custom aggregations.
   return array_reduce($nums, fn($carry, $n) => $carry + $n);
}
$ans = sum_array(14,15,14,13,12);
echo $ans.'<br>';