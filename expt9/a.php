<?php
// Sample input data
$array1 = ['c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black'];
$array2 = ['c2', 'c4'];

// Function to filter elements based on keys
function filterElements($array1, $array2) {
    $filteredArray = [];
    foreach ($array1 as $key => $value) {
        if (!in_array($key, $array2)) {
            $filteredArray[$key] = $value;
        }
    }
    return $filteredArray;
}

// Call the function and get the filtered array
$result = filterElements($array1, $array2);

// Display the filtered array in the HTML
echo "<script>document.getElementById('filteredArray').innerHTML = 'Array(" . json_encode($result) . ")';</script>";
?>