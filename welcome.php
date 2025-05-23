<?php
session_start();
if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
  <div class="container mt-5">
    <div class="card shadow p-4">
      <h2>Welcome, <?= $_SESSION['username'] ?>!</h2>
      <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
    </div>
  </div>
</body>
</html>