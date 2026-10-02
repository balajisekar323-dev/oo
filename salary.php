<!DOCTYPE html>
<html>
<head>
    <title>PHP Program to Find Gross Salary</title>
</head>
<body>
<form method="post">
    <label>Enter basic salary:</label>
    <input type="number" step="any" name="salary" placeholder="Enter basic salary" required>
    <br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
function calculateSalary($basic)
{
    $da = 0.4 * $basic;
    $hra = 0.2 * $basic;
    $gross = $basic + $da + $hra;

    return array($da, $hra, $gross);
}

if (isset($_POST['submit'])) {
    $basic_salary = $_POST['salary'];

    if ($basic_salary === '' || !is_numeric($basic_salary) || $basic_salary < 0) {
        echo "Please enter a valid salary.";
    } else {
        list($dallowance, $house_rent, $gross_salary) = calculateSalary((float) $basic_salary);

        echo "Basic Salary: $basic_salary /- <br>";
        echo "Dearness Allowance: $dallowance /- <br>";
        echo "House Rent: $house_rent /- <br><br>";
        echo "Gross Salary: $gross_salary /-";
    }
}
?>
</body>
</html>