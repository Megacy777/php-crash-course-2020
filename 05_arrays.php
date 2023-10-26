<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];
// Print the whole array
echo '<pre>';
var_dump($fruits); // print_r
echo '</pre>';

// Get element by index
echo $fruits[0].'<br>';

// Set element by index
$fruits[] = "Peach";

// Check if array has element at index 2
echo '<pre>';
var_dump(isset($fruits[4]));
echo '</pre>';

// Append element




// Print the length of the array
echo count($fruits).'<br>';


// Add element at the end of the array
$fruits[] = 'Peach';
echo $fruits[3].'<br>';
array_push($fruits, 'Foo');


// Remove element from the end of the array
array_pop($fruits);
echo '<pre>';
var_dump($fruits);
echo '</pre>';


// Add element at the beginning of the array
array_unshift($fruits, 'Apple');
// Remove element from the beginning of the array
array_shift($fruits);


// Split the string into an array
$string = "Bungo,Doari,Shoki-shoki";
echo '<pre>';
var_dump(explode(",", $string));
echo '</pre>';

print_r($fruits).'<br>';

// Combine array elements into string
echo implode(",", $fruits).'<br>';


// Check if element exist in the array

// Search element index in the array
echo '<pre>';
var_dump(array_search("Peach", $fruits));
echo '</pre>';


// Merge two arrays
$vegetables = ['Potato', 'Cucumber'];
echo '<pre>';
var_dump(array_merge($fruits, $vegetables));
var_dump([...$fruits, ...$vegetables]); // Since PHP 7.4
echo '</pre>';


// Sorting of array (Reverse order also)
sort($fruits); //sort, rsort
echo '<pre>';
var_dump($fruits);
echo '</pre>';

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Mashauri',
    'surname' => 'Massawe',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games'],
];
// Get element by key
echo $person['name'].'<br>';
// Set element by key
$person['channel'] = 'ITV na RadioOne';

//access elements from an associative array  use the correct syntax for associative arrays
//can concatenate them with the (.)
echo $person['name'] . ', ' . $person['channel'] . '<br>';


// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])){
    $person['address'] = 'Unknown';
}
$person['address'] ??= 'Unknown';
echo $person['address'].'<br>';

// Check if array has specific key
echo '<pre>';
var_dump(isset($person['age']));  // Change age into "location"
echo '</pre>';

// Print the keys of the array
echo '<pre>';
var_dump(array_keys($person));
echo '</pre>';

// Print the values of the array
echo '<pre>';
var_dump(array_values($person));
echo '</pre>';

// Sorting associative arrays by values, by keys
ksort($person); // ksort, krsort, asort, arsort
echo '<pre>';
var_dump($person);
echo '</pre>';

// Two dimensional arrays

$tasks = [
	['Learn PHP programming', 2],
	['Practice PHP', 2],
	['Work', 8],
	['Do exercise', 1],
];

$tasks[] = ['Build something matter in PHP', 2];

print_r($tasks );