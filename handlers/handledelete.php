<?php
session_start();
require("../config/db.php");

// Check if user is logged in
if (!isset($_SESSION['user'])) {
  header("Location: ../pages/login.php");
  exit();
}

// Get article id from request body
$id = $_POST['id'];

// Check if id is empty
if (!isset($id)) {
  echo "Article id is required!";
  exit();
}

// Delete article if it belongs to logged in user
try {
  $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id AND user_id = :user_id");
  $stmt->execute(['id' => $id, 'user_id' => $_SESSION['user']['id']]);
  header("Location: /peernews/pages/dashboard.php");
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
