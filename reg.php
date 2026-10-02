<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
    <style>
        .main {
            width: 50%;
            margin: auto;
            border: 4px solid black;
            padding: 1em;
        }
    </style>
</head>
<body>
<div class="main">
<form method="post">
    <center>
        <h1>Student Registration</h1>
        <hr>

        <input type="text" name="fname" placeholder="FIRST NAME" required><br><br>
        <input type="text" name="mname" placeholder="MIDDLE NAME"><br><br>
        <input type="text" name="lname" placeholder="LAST NAME" required><br><br>
        <input type="email" name="email" placeholder="EMAIL" required><br><br>
        <input type="text" name="mobile" placeholder="MOBILE" required><br><br>

        <select name="city" required>
            <option value="">-- SELECT CITY --</option>
            <option value="Trichy">Trichy</option>
            <option value="Chennai">Chennai</option>
            <option value="Madurai">Madurai</option>
        </select><br>
    </center>

    <hr>

    <h4>GENDER</h4>
    <input type="radio" name="gender" value="Male" required> Male
    <input type="radio" name="gender" value="Female"> Female<br>

    <hr>

    <h4>HOBBIES</h4>
    <input type="checkbox" name="hobby[]" value="Cricket"> Cricket
    <input type="checkbox" name="hobby[]" value="Football"> Football
    <input type="checkbox" name="hobby[]" value="Chess"> Chess<br>

    <hr>

    <center>
        <input type="password" name="pass" placeholder="Password" required><br><br>
        <input type="submit" name="submit" value="Register">
        <input type="reset" value="Reset">
    </center>
</form>

<?php
if (isset($_POST['submit'])) {
    $fname = htmlspecialchars($_POST['fname'] ?? '');
    $lname = htmlspecialchars($_POST['lname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $mobile = htmlspecialchars($_POST['mobile'] ?? '');
    $city = htmlspecialchars($_POST['city'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? 'Not selected');

    $hobbies = isset($_POST['hobby'])
        ? implode(", ", array_map('htmlspecialchars', $_POST['hobby']))
        : "None";

    echo "<hr><h3>Welcome, $fname $lname</h3>";
    echo "Email: $email<br>";
    echo "Mobile: $mobile<br>";
    echo "City: $city<br>";
    echo "Gender: $gender<br>";
    echo "Hobbies: " . htmlspecialchars($hobbies);
}
?>
</div>
</body>
</html>