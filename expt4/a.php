<?php
function newton_square_root($number, $tolerance = 0.000001) {
    $guess = $number / 2;

    while (abs($guess * $guess - $number) > $tolerance) {
        $guess = ($guess + $number / $guess) / 2;
    }

    return $guess;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inpnumber = floatval($_POST["inpnumber"]);

    if ($inpnumber < 0) {
        echo "Please enter a non-negative number.";
    } else {
        $result = newton_square_root($inpnumber);
        echo "The square root of $number is approximately $result";
    }
}
?>
