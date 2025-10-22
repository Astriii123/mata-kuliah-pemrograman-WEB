<?php
$host = "localhost";
$user = "root"; // default user XAMPP
$pass = "";     // default tanpa password
$db   = "diary_db"; // nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>
