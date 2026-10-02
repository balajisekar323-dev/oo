<?php
// 11. Cookies
// A cookie is available from the next request after it is set.
setcookie("user", "IIIBSC", time() + 3600, "/");
?>
<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_COOKIE["user"])) {
    echo "Cookie value: " . htmlspecialchars($_COOKIE["user"]);
} else {
    echo "Cookie has been set. Refresh the page to read the cookie value.";
}
?>

</body>
</html>