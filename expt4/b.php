<?php
// Function to generate the histogram array
function generate_histogram($scores) {
  $histogram = array_fill(0, 11, 0); // Initialize histogram with 11 elements (0-100 range)
  foreach ($scores as $score) {
    $index = floor($score / 10); // Determine the index based on the score
    $histogram[$index]++;
  }
  return $histogram;
}

// Get the scores from the form input
$scores_string = $_POST['scores'];
$scores_array = explode(',', $scores_string);

// Generate the histogram
$histogram = generate_histogram($scores_array);

// Display the histogram
echo "<h2>Histogram:</h2>";
for ($i = 0; $i < 11; $i++) {
  $range = $i * 10 . "-" . ($i + 1) * 10 - 1;
  echo "<p>$range: " . str_repeat("*", $histogram[$i]) . "</p>";
}
?>