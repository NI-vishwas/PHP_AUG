<?php
function calculateCompoundInterest($principal, $rate, $time, $n) {
  // Calculate the compound interest formula
  $amount = $principal * pow(1 + ($rate / $n), ($n * $time));
  $compoundInterest = $amount - $principal;
  return $compoundInterest;
}

// Get user input
$principal = floatval($_POST['principal']);
$rate = floatval($_POST['rate']);
$time = floatval($_POST['time']);
$n = intval($_POST['n']);

// Calculate and display the compound interest
$compoundInterest = calculateCompoundInterest($principal, $rate, $time, $n);
echo "Compound Interest: " . number_format($compoundInterest, 2) . "\n";
?>