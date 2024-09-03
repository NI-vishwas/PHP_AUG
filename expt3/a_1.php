<?php
    $inpnumber = intval($_POST["inpnumber"]);

    if ($inpnumber % 2 == 0) {
        echo "$inpnumber is even.";
    } else {
        echo "$inpnumber is odd.";
    }
?>