<?php
// 2. Various loop control structures

// 2(a). For
echo "<h3>For Loop</h3>";
for ($i = 0; $i < 5; $i++) {
    $product = 10 * $i;
    echo "The Product of 10*$i = $product.<br>";
}

// 2(b). Foreach
echo "<h3>Foreach Loop</h3>";
$animal_List = array("Lion", "dog", "wolf", "leopard", "tiger");

foreach ($animal_List as $array_List) {
    echo htmlspecialchars($array_List) . "<br>";
}

// 2(c). While
echo "<h3>While Loop</h3>";
$i = 1;
echo "The Number from 1 to 10:<br>";

while ($i <= 10) {
    echo $i . " ";
    $i++;
}
?>