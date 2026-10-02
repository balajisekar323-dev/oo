<!DOCTYPE html>
<html>
<head>
    <title>PHP String Functions</title>
</head>
<body>
<?php
// chr()
echo "Your Character is = 74<br>";
echo "By using 'chr()' function Your value is ---> " . chr(74) . "<br>";

// ord()
echo "<br>ASCII Value of h is ---> " . ord("h") . "<br><br>";

// str_shuffle()
$str = "Jamal Mohammed College ";
echo "Before Using 'str_shuffle' ---> " . htmlspecialchars($str) . "<br>";
echo "After Using 'str_shuffle' ---> " . htmlspecialchars(str_shuffle($str)) . "<br><br>";

// strcmp()
echo "'strcmp()' returns 0 if two strings are equal --> "
    . strcmp("Fardeen", "rilvan") . "<br><br>";

// substr()
$string = "III BSC Students ! ";
echo "Sub String of III BSC Students ---> " . htmlspecialchars(substr($string, 4)) . "<br><br>";

// str_replace()
echo "Replace the string ---> "
    . htmlspecialchars(str_replace("III BSC", "BScCs", $string));
?>
</body>
</html>