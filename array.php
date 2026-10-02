<?php
// 6. Arrays - Splitting and Merging

$big_array = array("A1", "B1", "C1", "A2", "B2", "C2");
$sub_array = array_slice($big_array, 0, 4);

echo "The subarray contains the first four elements of big_array<br>";
echo "<pre>" . htmlspecialchars(print_r($sub_array, true)) . "</pre>";

$array1["A"] = "AAA";
$array1["B"] = "BBB";

$array2["A"] = "aaa";

$array_12 = array_merge($array1, $array2);

echo "When two arrays have identical string keys, the values are re-indexed by array_merge()<br>";
echo "<pre>" . htmlspecialchars(print_r($array_12, true)) . "</pre>";

$array11 = array("A1", "B1", "C1");
$array22 = array("A2", "B2", "C2");

$array_1212 = array_merge($array11, $array22);

echo "With numeric keys, the values are appended and re-indexed<br>";
echo "<pre>" . htmlspecialchars(print_r($array_1212, true)) . "</pre>";
?>