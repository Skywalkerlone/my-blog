<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create New Post</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 20px;
    }

    .container {
      max-width: 600px;
      margin: 40px auto;
      background: #fff;
      padding: 30px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
      border-radius: 8px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    input[type="text"],
    textarea {
      padding: 10px;
      margin-bottom: 20px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    button {
      padding: 12px;
      font-size: 16px;
      background-color: #0077cc;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background-color: #005fa3;
    }

    .message {
      text-align: center;
      margin-top: 20px;
      background: #e6ffe6;
      border: 1px solid #b2ffb2;
      padding: 10px;
      color: #2d7f2d;
      border-radius: 5px;
    }

    a {
      color: #0077cc;
      text-decoration: none;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Create a New Post</h1>
    <form action="create.php" method="post">
      <input type="text" name="title" placeholder="Enter post title" required>
      <textarea name="content" placeholder="Write your content here..." rows="10" required></textarea>
      <button type="submit" name="submit">Publish Post</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
      $title = $conn->real_escape_string($_POST['title']);
      $content = $conn->real_escape_string($_POST['content']);
      $conn->query("INSERT INTO posts (title, content) VALUES ('$title', '$content')");
      echo "<div class='message'>Post added! <a href='index.php'>Back to blog</a></div>";
    }
    ?>
  </div>
</body>
</html>
