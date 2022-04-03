<?php
$servername = "173.254.104.205";
$username = "mayurapa_ict_crew";
$password = "n#aqrNN%(}sx";
$dbname = "mayurapa_mayurapada.lk";

$conn = new mysqli($servername, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
  }

//   $sql = "INSERT INTO `test`(`title`, `tag`, `thumb`, `date`, `images`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')";
//   $conn->query($sql);


?>