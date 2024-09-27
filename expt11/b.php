<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $text = $_POST["text"];
    $pattern = $_POST["pattern"];
    $replacement = $_POST["replacement"];

    // Replace occurrences of the pattern with the replacement text
    $result = preg_replace($pattern, $replacement, $text);

    echo "Original text: " . $text . "<br>";
    echo "Replaced text: " . $result;
}
?>
