<?php

function reverseWords($s) {
    $length = strlen($s);
    $result = '';
    $word = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        if ($s[$i] != ' ') {
            // Non-space character, append to the current word
            $word = $s[$i] . $word;
        } elseif ($word != '') {
            // Space encountered, and we have a non-empty word
            $result .= ($result == '') ? $word : ' ' . $word;
            $word = ''; // Reset the current word
        }
    }

    // Add the last word if any
    if ($word != '') {
        $result .= ($result == '') ? $word : ' ' . $word;
    }

    return $result;
}

// Example usage:
$input = "the sky is blue";
$output = reverseWords($input);
echo $output;

?>