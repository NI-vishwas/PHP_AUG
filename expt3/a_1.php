<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);

    if ($number % 2 == 0) {
        echo "$number is even.";
    } else {
        echo "$number is odd.";
    }
}
?>