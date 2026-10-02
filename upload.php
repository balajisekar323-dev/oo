<!DOCTYPE html>
<html>
<head>
    <title>PHP File Upload</title>
</head>
<body>
<h2>File Upload Demo</h2>

<form method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="photo" accept="image/*" required>
    <br><br>
    <input type="submit" value="Upload" name="submit">
</form>

<?php
if (isset($_POST['submit']) && isset($_FILES['photo'])) {
    $file = $_FILES['photo'];

    if ($file['error'] !== UPLOAD_ERR_OK) {
        echo "<p>File selection/upload error.</p>";
    } else {
        $name = basename($file['name']);
        $size = (int) $file['size'];
        $allowed = array("jpg", "jpeg", "png", "gif", "webp");
        $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed, true)) {
            echo "<p>Only image files are allowed.</p>";
        } elseif ($size > 2 * 1024 * 1024) {
            echo "<p>Maximum file size is 2 MB.</p>";
        } else {
            echo "<p>Selected file: " . htmlspecialchars($name) . "</p>";
            echo "<p>File size: " . $size . " bytes</p>";
            echo "<p>File validated successfully.</p>";
        }
    }
}
?>
</body>
</html>