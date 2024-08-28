<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string1 = $_POST["string1"];
    $string2 = $_POST["string2"];

    // Concatenate using single quotes
    $concatenatedString1 = $string1 . $string2;

    // Concatenate using double quotes
    $concatenatedString2 = "$string1 $string2";

    echo "Concatenated strings using single quotes: " . $concatenatedString1 . "<br>";
    echo "Concatenated strings using double quotes: " . $concatenatedString2;
}
?>