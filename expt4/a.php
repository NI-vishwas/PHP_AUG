<?php
// Function to calculate mean
function calculate_mean($numbers) {
  $sum = array_sum($numbers);
  $count = count($numbers);
  return $sum / $count;
}

// Function to calculate standard deviation
function calculate_standard_deviation($numbers) {
  $mean = calculate_mean($numbers);
  $squared_differences = array_map(function($num) use ($mean) {
    return pow($num - $mean, 2);
  }, $numbers);
  $variance = array_sum($squared_differences) / (count($numbers) - 1);
  return sqrt($variance);
}

// Get the numbers from the form input
$numbers_string = $_POST['numbers'];
$numbers_array = explode(',', $numbers_string);

// Calculate mean and standard deviation
$mean = calculate_mean($numbers_array);
$standard_deviation = calculate_standard_deviation($numbers_array);

// Display the results
echo "<h2>Results:</h2>";
echo "<p>Mean: " . number_format($mean, 2) . "</p>";
echo "<p>Standard Deviation: " . number_format($standard_deviation, 2) . "</p>";
?>