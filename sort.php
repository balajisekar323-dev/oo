<?php
// 5. Array - Sorting of names

$arr = array("Rilvan", "Fardeen", "Rayan", "Hasan");

echo "Original array:<br>";
echo "<pre>" . htmlspecialchars(print_r($arr, true)) . "</pre>";

// Sorting array using sort()
sort($arr);

echo "After sort() (ascending):<br>";
echo "<pre>" . htmlspecialchars(print_r($arr, true)) . "</pre>";

// Reverse sorting array using rsort()
rsort($arr);

echo "After rsort() (descending):<br>";
echo "<pre>" . htmlspecialchars(print_r($arr, true)) . "</pre>";
?>