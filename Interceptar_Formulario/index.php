<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
  <h1>hello world</h1>
  <form action="/auth" method="POST">
    <input type="text" name="username" placeholder="username">
    <input type="password" name="password" placeholder="password">
    <input type="submit" value="login">
  </form>
  <div id="p"></div>
  <script src="main.js"></script>
</body>
</html>