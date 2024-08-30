<?php
function fibonacci($n) {
    if ($n <= 1) {
        return $n;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = intval($_POST['num']);

    if ($num > 0) {
        echo "Fibonacci Series for $num terms:<br>";
        for ($i = 0; $i < $num; $i++) {
            echo fibonacci($i) . " ";
        }
    } else {
        echo "Please enter a positive number.";
    }
}
?>