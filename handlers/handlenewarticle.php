<?php
session_start();
require("../config/db.php");

$title = $_POST['title'];
$body = $_POST['content'];
$user_id = $_SESSION['user']['id'];

// Check if image is uploaded
if (isset($_FILES['image'])) {
  $image = $_FILES['image'];
  $image_name = $image['name'];
  $image_tmp = $image['tmp_name'];
  $image_size = $image['size'];
  $image_error = $image['error'];

  $image_ext = explode('.', $image_name);
  $image_actual_ext = strtolower(end($image_ext));

  $allowed = ['jpg', 'jpeg', 'png', 'gif'];

  if (in_array($image_actual_ext, $allowed)) {
    if ($image_error === 0) {
      if ($image_size < 1000000) {
        $image_name_new = uniqid('', true) . "." . $image_actual_ext;
        $image_destination = '../uploads/' . $image_name_new;
        move_uploaded_file($image_tmp, $image_destination);
      } else {
        $_SESSION['error'] = "Your image is too big!";
        header("Location: ../pages/addarticle.php");
        exit();
      }
    } else {
      $_SESSION['error'] = "There was an error uploading your image!";
      header("Location: ../pages/addarticle.php");
      exit();
    }
  } else {
    $_SESSION['error'] = "You cannot upload files of this type!";
    header("Location: ../pages/addarticle.php");
    exit();
  }
}

try {
  // $stmt = $pdo->prepare("INSERT INTO posts (title, body, user_id) VALUES (:title, :body, :user_id)");
  $stmt = $pdo->prepare("INSERT INTO posts (title, body, user_id, image) VALUES (:title, :body, :user_id, :image)");
  $stmt->execute(['title' => $title, 'body' => $body, 'user_id' => $user_id, 'image' => $image_name_new]);
  // $stmt->execute(['title' => $title, 'body' => $body, 'user_id' => $user_id]);
  $_SESSION['success'] = "Article added successfully.";
  header("Location: ../pages/dashboard.php");
} catch (PDOException $e) {
  $_SESSION['error'] = "Error: " . $e->getMessage();
  header("Location: ../pages/addarticle.php");
}

exit();
