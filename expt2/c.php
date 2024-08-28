<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $greeting = $_POST["greeting"];

    // Concatenate multiple strings with literals and variables
    $message = "Hello, $name! $greeting.";

    echo $message;
}
?>