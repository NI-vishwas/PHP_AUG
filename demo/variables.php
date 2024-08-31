<?php
// Getting the values from the HTML input fields
$base = $_POST["base"];
$height = $_POST["height"];

// Computing the value of the area: formula: area = 1/2bh
$area = .5 * $base * $height;

//output the result
echo $area;
?>