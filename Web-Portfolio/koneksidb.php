<?php
$servername = "belajar-web.test";
$username = "root";
$password = "";
$dbname = "db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = 'SELECT * FROM tabel,kolas,kolabout,koljudul,kolprojek,kolskills,kolpendidikan';
$data = [];
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
  }
} else {
  echo "0 results";
}

mysqli_close($conn);

?>