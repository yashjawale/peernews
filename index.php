<?php require("components/pagestart.php") ?>

<?php
require("config/db.php");

try {
  $stmt = $pdo->query("SELECT posts.*, users.name as user_name FROM posts JOIN users ON posts.user_id = users.id ORDER BY created_at DESC");
  $posts = $stmt->fetchAll();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}

?>

<main class="container mx-auto px-6 py-20">
  <h1 class="text-4xl font-bold">Latest Updates</h1>
  <div class="grid md:grid-cols-2 lg:grid-cols-3 py-8 gap-4">

    <!-- Show latest posts -->
    <?php foreach ($posts as $post) : ?>
      <a href="/peernews/pages/viewarticle.php?id=<?= $post['id'] ?>" class="border-[1px] border-black rounded-xl overflow-hidden">
        <!-- <img src="https://picsum.photos/500/400" alt="Placeholder" class="w-full h-48 object-cover object-center"> -->
        <img src="/peernews/uploads/<?= $post['image'] ?>" alt="Placeholder" class="w-full h-48 object-cover object-center">
        <div class="p-4 flex flex-col gap-2">
          <p class="text-neutral-500 uppercase text-sm font-light"><?= date("d M Y h:i A", strtotime($post['created_at'])) ?></p>
          <h2 class="font-semibold text-2xl"><?= $post['title'] ?></h2>
          <p class="text-neutral-500 font-light">By <?= $post['user_name'] ?></p>
        </div>
      </a>
    <?php endforeach; ?>

    <!-- Fallback if no articles -->
    <?php if (count($posts) === 0) : ?>
      <p class="text-lg">No articles published yet.</p>
    <?php endif; ?>

  </div>
</main>

<?php require("components/pageend.php") ?>