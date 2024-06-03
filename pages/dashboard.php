<?php include("../components/pagestart.php") ?>

<?php
require("../config/db.php");

session_start();

// Check if user is logged in & get details
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit();
}

// Set user variable
$user = $_SESSION['user'];

// Get all articles by user
try {
  $stmt = $pdo->query("SELECT * FROM posts WHERE user_id = {$_SESSION['user']['id']}");
  $posts = $stmt->fetchAll();
} catch (PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>

<main class="container mx-auto px-6 py-20 min-h-[80svh]">
  <div class="flex flex-col gap-8">
    <h1 class="text-4xl font-bold">Hello, <?php echo $user['name'] ?>!</h1>
    <p>Here you can manage your articles.</p>

    <!-- Add new article button -->
    <a href="addarticle.php" class="bg-primary uppercase w-fit text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Add New Article</a>

    <div class="grid md:grid-cols-2 gap-8">

      <!-- Render card for each article -->
      <?php foreach ($posts as $post) : ?>
        <div class="p-4 border-[1px] border-black rounded-lg flex flex-col gap-3 items-start">
          <h2 class="text-2xl font-semibold"><?php echo $post['title'] ?></h2>
          <p class="uppercase"><?php echo date("d M Y h:i A", strtotime($post['created_at'])) ?></p>
          <!-- Edit button -->
          <!-- <a href="editarticle.php?id=<?php echo $post['id'] ?>" class="bg-primary text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Edit</a> -->
          <!-- Delete button -->
          <div class="flex gap-3">
            <button onclick="handleDelete(<?= $post['id'] ?>)" class="bg-red-500 text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Delete</button>
            <!-- View button -->
            <a target="_blank" href="/peernews/pages/viewarticle.php?id=<?= $post['id'] ?>" class="bg-primary text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">View</a>
          </div>
        </div>
      <?php endforeach; ?>

      <!-- Show fallback text if no articles found -->
      <?php if (count($posts) === 0) : ?>
        <p class="text-lg">Go ahead and write your first masterpiece!</p>
      <?php endif; ?>
    </div>
  </div>
</main>

<script>
  function handleDelete(id) {
    if (confirm("Are you sure you want to delete this article?")) {
      // Send a post request to delete article with id in formdata
      fetch("/peernews/handlers/handledelete.php", {
        method: "POST",
        body: new URLSearchParams({
          id: id
        })
      }).then(() => {
        // Reload page after deletion
        location.reload();
      });

    }
  }
</script>

<?php include("../components/pageend.php") ?>