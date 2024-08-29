<?php
$principal = $_POST["principal"];
$rate_of_interest = $_POST["roi"];
$number_of_years = $_POST["noy"];
$number_of_times = $_POST["times"];

$amount = $principal*(1+($rate_of_interest/$number_of_times))**($number_of_times*$number_of_years);

echo "The Compound Interest is: ";
echo $amount;
?>