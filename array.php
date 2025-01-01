<?php
// Step 1: Create an array to store student names
$students = array("John", "Alice", "Bob", "Charlie", "David");

// Step 2: Display the original array using print_r()
echo "<h3>Original Student Names:</h3>";
print_r($students);
echo "<br><br>";

// Step 3: Sort the array in ascending order using asort()
asort($students);
echo "<h3>Sorted Student Names (Ascending Order):</h3>";
print_r($students);
echo "<br><br>";

// Step 4: Sort the array in descending order using arsort()
arsort($students);
echo "<h3>Sorted Student Names (Descending Order):</h3>";
print_r($students);
?>

