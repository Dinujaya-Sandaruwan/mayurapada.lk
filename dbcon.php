<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mayurapada.lk";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

//   $sql = "INSERT INTO `test`(`title`, `tag`, `thumb`, `date`, `images`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
//   $conn->query($sql);


?>