<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST["filename"];
    $content = $_POST["content"];

    if (file_exists($filename)) {
        // Update existing file
        file_put_contents($filename, $content);
        echo "File updated successfully.";
    } else {
        // Create new file
        file_put_contents($filename, $content);
        echo "File created successfully.";
    }
}
?>