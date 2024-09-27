<?php
    $dividend = intval($_POST["dividend"]);
    $divisor = intval($_POST["divisor"]);

    if ($dividend % $divisor == 0) {
        echo "$dividend is divisible by $divisor.";
    } else {
        echo "$dividend is not divisible by $divisor.";
    }

?>
