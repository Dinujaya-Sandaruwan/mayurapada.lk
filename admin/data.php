<?php
$pass = $_POST["pass"];

if ($pass == "2022mayura#") {
    $cookie_name = "login";
    $cookie_value = "true";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    header("Location: ../add/");
} 
else {
    header("Location: index.php");
}



?>