<!-- /*
write a program in php to count number of characters in the given string and state how many times each character appears.
the string is "How do you fix API MSn Win CRT convert l110 dill is missing from your computer"
*/ -->
<?php
$string = "How do you fix API MSn Win CRT convert l110 dill is missing from your computer";

// Remove spaces and convert the string to lowercase for case-insensitive counting
$string = str_replace(' ', '', strtolower($string));


//associative array, $characterCount, to store the character counts.
$characterCount = array();

//loop through each character in the string and increment the count in the $characterCount array.
for ($i = 0; $i < strlen($string); $i++) {
    $char = $string[$i];

    if (isset($characterCount[$char])) {
        $characterCount[$char]++;
    } else {
        $characterCount[$char] = 1;
    }
}

// Display the character counts
echo "......Character counts in the given string:\n";
foreach ($characterCount as $char => $count) {
    echo "Character '$char' .appears $count times.\n".'<br>';
}


// Calculate the total count of characters
$totalCount = array_sum($characterCount);
 echo "total number of characters.....".$totalCount.'<br>';
?>

<?php

// give an array of six integers, write a program used to find the second largest element 
// present in an array without sorting
// the given array is { 130,360,20,110,350,20}
echo "QN2. Given array { 130,360,20,110,350,20}".'<br>';

$array = [130, 360, 20, 110, 350, 20];

$firstMax = PHP_INT_MIN; // Initialize the first maximum to the smallest possible value
$secondMax = PHP_INT_MIN; // Initialize the second maximum to the smallest possible value

foreach ($array as $element) {
    if ($element > $firstMax) {
        // If the current element is greater than the first maximum,
        // update the second maximum to be the old first maximum
        $secondMax = $firstMax;
        // Update the first maximum to the current element
        $firstMax = $element;
    } elseif ($element > $secondMax && $element !== $firstMax) {
        // If the current element is greater than the second maximum (but not equal to the first maximum),
        // update the second maximum to the current element
        $secondMax = $element;
    }
}
// Check if a second maximum was found
if ($secondMax !== PHP_INT_MIN) {
    echo "The second largest element in the array is: $secondMax"."<br>";
} else {
    echo "There is no second largest element in the array."."<br>";
}
?>


<?php
// WRITE program to remove duplicate of element in array (1,2,3,1,4,5,2,3,1,2).
echo "WRITE program to remove duplicate of element in array (1,2,3,1,4,5,2,3,1,2)"."<br>";

$array = [1, 2, 3, 1, 4, 5, 2, 3, 1, 2];

// Use array_unique to remove duplicates
$uniqueArray = array_unique($array);

// Convert the unique elements back to a re-indexed array
$uniqueArray = array_values($uniqueArray);

// Display the resulting array without duplicates
echo "Array without duplicates: ";
foreach ($uniqueArray as $element) {
    echo "$element ";
}
?>
