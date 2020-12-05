<?php
// $servername = "localhost";
// $username = "root";
// $password = "12345678";
// $dbname = "ratbro_db";
$servername = "sql7.freesqldatabase.com";
$username = "sql7380330";
$password = "CrrLk6Lqh3";
$dbname = "sql7380330";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connect done. <br>";

$sql = "SELECT username, level FROM users";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {

    echo "username: " . $row["username"]. " - level: " . $row["level"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>