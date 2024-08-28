
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shape = $_POST["shape"];
    $base = $_POST["base"];
    $height = $_POST["height"];
    $width = $_POST["width"];

    if ($shape == "triangle") {
        $area = 0.5 * $base * $height;
        echo "The area of the triangle is: " . $area;
    } else if ($shape == "rectangle") {
        $area = $base * $width;
        echo "The area of the rectangle is: " . $area;
    } else {
        echo "Invalid shape selected.";
    }
}
?>