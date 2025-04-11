<?php
// Delete the cookie named 'user'
setcookie("user", "", time() - 3600, "/");

echo "Cookie 'user' has been deleted.";
echo "<br><br>";
echo "Code executed by Dhruv Yadav 0221BCA095";
?>