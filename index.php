<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Mini Blog</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f9f9f9;
      padding: 20px;
      margin: 0;
    }

    .container {
      margin: top 100px; ;
      max-width: 800px;
      margin: auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    .new-post {
      display: block;
      text-align: right;
      margin-bottom: 20px;
    }

    .new-post a {
      background-color: #0077cc;
      color: white;
      padding: 10px 15px;
      text-decoration: none;
      border-radius: 5px;
      transition: background 0.3s ease;
    }

    .new-post a:hover {
      background-color: #005fa3;
    }

    .post {
      margin-bottom: 30px;
      padding-bottom: 15px;
      border-bottom: 1px solid #eee;
    }

    .post h2 {
      margin: 0;
      font-size: 22px;
    }

    .post h2 a {
      text-decoration: none;
      color: #0077cc;
    }

    .post h2 a:hover {
      text-decoration: underline;
    }

    .post p {
      color: #555;
      margin-top: 10px;
    }

    .post small {
      color: #888;
      font-size: 13px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Mini Blog</h1>
    <div class="new-post">
      <a href="create.php">+ New Post</a>
    </div>

    <?php
      $result = $conn->query("SELECT * FROM posts ORDER BY created_at DESC");
      while($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h2><a href='post.php?id={$row['id']}'>" . htmlspecialchars($row['title']) . "</a></h2>";
        echo "<p>" . substr(htmlspecialchars($row['content']), 0, 100) . "...</p>";
        echo "<small>Posted on " . $row['created_at'] . "</small>";
        echo "</div>";
      }
    ?>
  </div>
</body>
</html>
