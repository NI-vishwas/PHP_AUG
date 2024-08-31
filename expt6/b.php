<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST["filename"];
    $word = strtolower($_POST["word"]);

    if (file_exists($filename)) {
        $content = file_get_contents($filename);
        $words = explode(" ", strtolower($content));

        $frequency = 0;
        foreach ($words as $w) {
            if ($w == $word) {
                $frequency++;
            }
        }

        echo "The word '$word' appears $frequency times in the file.";
    } else {
        echo "File not found.";
    }
}
?>