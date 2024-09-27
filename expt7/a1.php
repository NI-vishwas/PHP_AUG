<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filename = $_POST["filename"];
    $num_lines = $_POST["num_lines"];

    if (file_exists($filename)) {
        $lines = file($filename);

        if (count($lines) >= $num_lines) {
            $first_n_lines = array_slice($lines, 0, $num_lines);
            foreach ($first_n_lines as $line) {
                echo $line;
            }
        } else {
            echo "The file has less than $num_lines lines.";
        }
    } else {
        echo "File not found.";
    }
}
?>