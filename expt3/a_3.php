<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = intval($_POST["number"]);

    $sqrt = sqrt($number);

    if ($sqrt == floor($sqrt)) {
        echo "$number is a perfect square.";
    } else {
        echo "$number is not a perfect square.";
    }
}
?>