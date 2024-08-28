<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST["string"];

    // Concatenate strings with single quotes
    $message = "You entered: '" . $string . "'";

    echo $message;
}
?>