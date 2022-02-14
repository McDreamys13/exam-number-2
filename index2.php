<?php
$hostname = "172.20.0.2";
$username = "root";
$password = "password";
$database = "trucorp";

$conn = mysqli_connect($hostname, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM users");

$count_user = 0;

while($data = $result->fetch_assoc()) :
  $count_user++;
endwhile;

echo "Total User : " . $count_user;

mysqli_close($conn);
