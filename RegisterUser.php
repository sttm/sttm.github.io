<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "ratbro_db";

$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];
$EmailAddress = $_POST["EmailAddress"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT username FROM users WHERE username = '" . $loginUser . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Username is alrady taken.";

} else {
  echo "Username ", $loginUser, " creating ... ";
  $sql2 = "INSERT INTO users (username, password, level, coins, email) VALUES ('" . $loginUser . "', '" . $loginPass . "', 1, 0, '" . $EmailAddress . "')";
  if ($conn->query($sql2) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
$conn->close();
?>