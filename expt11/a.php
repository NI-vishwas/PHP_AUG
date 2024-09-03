<?php
function countAadhaarNumbers($text) {
    // Regular expression to match Aadhaar numbers (12 digits)
    $aadhaarRegex = '/\d{12}/';

    // Find all matches of the Aadhaar number pattern
    preg_match_all($aadhaarRegex, $text, $matches);

    // Count the number of matches
    $count = count($matches[0]);

    return $count;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];

    // Count the Aadhaar numbers in the text
    $count = countAadhaarNumbers($text);

    echo "Number of Aadhaar numbers found: " . $count;
}
?>