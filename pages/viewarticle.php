<?php include("../components/pagestart.php") ?>

<!-- Display article according to id -->

<?php
require("../config/db.php");

try {
  $stmt = $pdo->query("SELECT * FROM posts WHERE id = {$_GET['id']}");
  $post = $stmt->fetch();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>

<!-- Display post -->
<main class="container mx-auto px-6 py-20">
  <div class="md:w-11/12 lg:w-8/12">
    <h1 class="text-4xl font-bold"><?= $post['title'] ?></h1>
    <div class="py-8">
      <p class="text-neutral-500 uppercase text-sm font-light"><?= date("d M Y h:i A", strtotime($post['created_at'])) ?></p>
      <img src="https://picsum.photos/800/600" alt="Placeholder" class="w-full h-[400px] mt-8 rounded-xl object-cover object-center">
      <p class="py-8"><?= $post['body'] ?></p>
      <p class="text-neutral-500 font-light">By <?= $post['user_id'] ?></p>
    </div>
  </div>
</main>

<?php include("../components/pageend.php") ?>