<?php
$host = 'localhost';
$user = 'sky';
$pass = '08108666501';
$dbname = 'blog_db';

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
