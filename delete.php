<?php
include 'db.php';
$id = intval($_GET['id']);
$conn->query("DELETE FROM posts WHERE id = $id");
header("Location: index.php");
