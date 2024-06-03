<?php
session_start();
require("../config/db.php");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password != $confirm_password) {
  $_SESSION['error'] = "Passwords do not match.";
  header("Location: ../pages/register.php");
  exit();
}

$password = password_hash($password, PASSWORD_DEFAULT);

try {
  $stmt = $pdo->prepare("INSERT INTO users (name, email, password) VALUES (:name, :email, :password)");
  $stmt->execute(['name' => $name, 'email' => $email, 'password' => $password]);
  $_SESSION['success'] = "User registered successfully.";
  header("Location: ../pages/login.php");
} catch (PDOException $e) {
  $_SESSION['error'] = "Error: " . $e->getMessage();
  header("Location: ../pages/register.php");
}

exit();
