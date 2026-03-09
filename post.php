<?php
include 'db.php';
$id = intval($_GET['id']);
$result = $conn->query("SELECT * FROM posts WHERE id = $id");
$post = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo htmlspecialchars($post['title']); ?></title>
</head>
<body>
  <h1><?php echo htmlspecialchars($post['title']); ?></h1>
  <p><?php echo nl2br(htmlspecialchars($post['content'])); ?></p>
  <small>Posted on <?php echo $post['created_at']; ?></small><br><br>
  <a href="index.php">← Back</a> | 
  <a href="delete.php?id=<?php echo $post['id']; ?>" onclick="return confirm('Delete this post?')">Delete</a>
</body>
</html>
