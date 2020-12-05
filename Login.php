<?php
// $servername = "localhost";
// $username = "root";
// $password = "12345678";
// $dbname = "ratbro_db";
$servername = "sql7.freesqldatabase.com";
$username = "sql7380330";
$password = "CrrLk6Lqh3";
$dbname = "sql7380330";
$loginUser = $_POST["loginUser"];
$loginPass = $_POST["loginPass"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT password FROM users WHERE username = '" . $loginUser . "'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if($row["password"] == $loginPass){
      echo "Login Success. ";
    } else {
      echo "Wrong Credentials.";
    }
  }
} else {
  echo "Username does not exists.";
}
$conn->close();
?>