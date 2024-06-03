<?php
session_start();
require("../config/db.php");

$title = $_POST['title'];
$body = $_POST['content'];
$user_id = $_SESSION['user']['id'];

try {
  $stmt = $pdo->prepare("INSERT INTO posts (title, body, user_id) VALUES (:title, :body, :user_id)");
  $stmt->execute(['title' => $title, 'body' => $body, 'user_id' => $user_id]);
  $_SESSION['success'] = "Article added successfully.";
  header("Location: ../pages/dashboard.php");
} catch (PDOException $e) {
  $_SESSION['error'] = "Error: " . $e->getMessage();
  header("Location: ../pages/addarticle.php");
}

exit();
