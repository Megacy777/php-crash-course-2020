<?php

// Function which prints "Hello I am Zura"
function hello()
{
    echo 'Hello I am Zura<br>';
}

hello();
hello();
hello();

// Function with argument
function hellos($name)
{
   echo "Hello I am $name";
}

// Create sum of two functions
function sum($a, $b)
{
    return $a + $b;
}

echo sum(4,5);
echo sum(9,10);

// Create function to sum all numbers using ...$nums
function sums(...$nums)
{
   $sums = 0;
   foreach ($nums as $num) $sums += $num;
   return $sums;
}
echo sum(1, 2, 3, 4, 6);

// Arrow functions
function sum_arra(...$nums)
{
   return array_reduce($nums, fn($carry, $n) => carry + $n);
}
echo sum_arra(1, 2, 3, 4, 6);


