<?php

session_start();
require("../config/db.php");

$email = $_POST['email'];
$password = $_POST['password'];

try {
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
  $stmt->execute(['email' => $email]);
  $user = $stmt->fetch();

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user'] = $user;
    header("Location: /peernews/pages/dashboard.php");
  } else {
    $_SESSION['error'] = "Invalid email or password.";
    header("Location: ../pages/login.php");
  }
} catch (PDOException $e) {
  $_SESSION['error'] = "Error: " . $e->getMessage();
  header("Location: ../pages/login.php");
}
