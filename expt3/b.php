<?php
    $a = floatval($_POST["a"]);
    $b = floatval($_POST["b"]);
    $c = floatval($_POST["c"]);

    $discriminant = pow($b, 2) - (4 * $a * $c);

    if ($discriminant > 0) {
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Roots are real and distinct: $root1 and $root2";
    } elseif ($discriminant == 0) {
        $root = -$b / (2 * $a);
        echo "Roots are real and equal: $root";
    } else {
        echo "Roots are imaginary.";
    }

?>
