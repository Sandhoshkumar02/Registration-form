<?php
include 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if ($user && password_verify($password, $user['password'])) {
  $_SESSION['username'] = $user['username'];
  header("Location: welcome.php");
} else {
  echo "Invalid login credentials. <a href='login.php'>Try again</a>";
}
?>