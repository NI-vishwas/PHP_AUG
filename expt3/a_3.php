<?php

    $inpnumber = intval($_POST["inpnumber"]);

    $sqrt = sqrt($inpnumber);

    if ($sqrt == floor($sqrt)) {
        echo "$inpnumber is a perfect square.";
    } else {
        echo "$inpnumber is not a perfect square.";
    }

?>
