<!DOCTYPE html>
<html>
<head>
    <title>Age Validation</title>
</head>
<body style="background-color:teal;">
<center>
<form method="post">
    <h2>Enter your age:</h2>
    <input type="number" name="age" min="0" placeholder="Enter your age" required>
    <br><br>
    <input type="submit" name="submit" value="SUBMIT">
</form>
</center>

<?php
if (isset($_POST['submit'])) {
    $age = $_POST["age"];

    if ($age === "" || !is_numeric($age)) {
        echo '<script>alert("Please enter a valid age");</script>';
    } elseif ($age < 18) {
        echo '<script>alert("You are below 18, so not eligible to watch");</script>';
    } else {
        echo '<script>alert("You are eligible to watch");</script>';
    }
}
?>
</body>
</html>