<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $url = $_POST["url"];
    $text = $_POST["text"];

    // Create a string with HTML elements
    $htmlString = "<a href='$url'>$text</a>";

    echo $htmlString;
}
?>