<!DOCTYPE html>
<html>
<head>
    <title>Arithmetic Operations Using Switch</title>
</head>
<body>
<center>
<h1>ARITHMETIC OPERATIONS DEMO USING SWITCH CASE IN PHP</h1>

<label>
    1 - Addition<br>
    2 - Subtraction<br>
    3 - Multiplication<br>
    4 - Division
</label>

<form method="post">
    <input type="number" step="any" name="num1" placeholder="Enter the Value 1" required><br><br>
    <input type="number" step="any" name="num2" placeholder="Enter the Value 2" required><br><br>
    <input type="number" name="option" min="1" max="4" placeholder="Option" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $a = $_POST['num1'];
    $b = $_POST['num2'];
    $ch = (int) $_POST['option'];

    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Please enter valid numbers.";
    } else {
        switch ($ch) {
            case 1:
                $r = $a + $b;
                echo "Addition of $a + $b = $r";
                break;

            case 2:
                $r = $a - $b;
                echo "Subtraction of $a - $b = $r";
                break;

            case 3:
                $r = $a * $b;
                echo "Multiplication of $a * $b = $r";
                break;

            case 4:
                if ($b == 0) {
                    echo "Division by zero is not allowed.";
                } else {
                    $r = $a / $b;
                    echo "Division of $a / $b = $r";
                }
                break;

            default:
                echo "Invalid option.";
        }
    }
}
?>
</center>
</body>
</html>