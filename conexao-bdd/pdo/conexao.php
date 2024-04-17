<?php
$servername = "localhost";
$username = "aluno";
$password = "ceep";

try {
  $conn = new PDO("mysql:host=$servername;dbname=3ds", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
  echo "<br>";
  print_r( $e->getMessage());
}
?>