<?php
        //DATE
//d - Represents the day of the month (01 to 31)
//m - Represents a month (01 to 12)
//Y - Represents a year (in four digits)
//l (lowercase 'L') - Represents the day of the week
// j - Represents 1-31 no 01X

        //TIME 
//H - 24-hour format of an hour (00 to 23)
//h - 12-hour format of an hour with leading zeros (01 to 12)
//i - Minutes with leading zeros (00 to 59)
//s - Seconds with leading zeros (00 to 59)
//a - Lowercase Ante Meridiem and Post Meridiem (am or pm)



// Print current timestamp date
echo "Current timestamp date".'<br>';
echo time().'<br><br>';

// Print current timestamp date
echo 'Print current timestamp date' . '<br>';
echo date('y-m-d-l H:i:s').'<br><br>';

// Print yesterday
echo "Print yesterday".'<br>';
echo date('y-m-d H:i:s', time() - 60 * 60 * 24).'<br><br>';
echo 'Print yesterday + 2 weeks' . '<br>';
echo date('y-m-d H:i:s', strtotime ('+2 week')).'<br><br>';

// Different format: https://www.php.net/manual/en/function.date.php
echo 'Print word-date' . '<br>';
echo date('F j Y, H:i:s').'<br><br>';

// Print current timestamp
echo 'Print current timestamp' . '<br>';
echo date('y-m-d-l H:i:s', time() - 60 * 60 * 24) . '<br><br>';

//string to timestamp format
echo 'string to timestamp format' . '<br>';
echo strtotime ('+1 week'). '<br><br>';

// Parse date: https://www.php.net/manual/en/function.date-parse.php

// Parse date from format: https://www.php.net/manual/en/function.date-parse-from-format.php
$dateString = 'February 4 2020 12:45:35';

$parsedDate = date_parse_from_format('F j Y H:i:s', $dateString);
echo '<pre>';
var_dump($parsedDate);
echo '</pre>'. '<br><br>';


//


echo 'The time is ' . date('h:i:sa').'<br><br>';;


////GETTING YOUR TIME ZONE
//date_default_timezone_set('Tanzania/Moshi');
date_default_timezone_set('America/New_York');
echo " the time is " . date('h:i:s').'<br><br>';

//mktime(hour, minute, second, month, day, year)
$d = mktime(11, 14, 54, 8, 12, 2014);
echo 'Created date is ' . date('Y-m-d h:i:sa', $d).'<br><br>';


$d = strtotime('+3 Months');
echo date('Y-m-d h:i:sa', $d).'<br><br>';

//The example below outputs the dates for the next six Saturdays:
$startdate = strtotime('Saturday');
$enddate = strtotime('+6 weeks', $startdate);
echo 'outputing dates for the next six Saturdays'.'<br>';
while($startdate<$enddate)
    {
        echo date('M d', $startdate).'<br><br>';
        $startdate = strtotime('+1 weeks', $startdate);
    }


//outputs the number of days until Mapinduzi ya Zanzibar:

//This function converts the string 'January 12' into a Unix timestamp,
// representing the date and time for Mapinduzi of the current year
$d1 = strtotime('January 12');
// Calculate the number of days remaining until July 4th
$d2 = ceil(($d1 - time()) / 60 / 60 / 24);
// Display the result
echo 'There are ' . $d2 . ' days until Mapinduzi ya Zanzibar.'.'<br><br>';


// *TO DOs : 
// Date time class 
// Immutable DateTime 
// Time Zone -- UTC/GMT 
//    1. FORMAT 
//    2. String -> Date 
//    3. Date Operations












