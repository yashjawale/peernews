<?php include("../components/pagestart.php") ?>

<main class="container mx-auto px-6 py-20 min-h-[80svh]">
  <div class="flex flex-col gap-8">
    <h1 class="text-4xl font-bold">Hello, Ramesh Hilton!</h1>
    <p>Here you can manage your articles.</p>

    <!-- Add new article button -->
    <a href="addarticle.php" class="bg-primary uppercase w-fit text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Add New Article</a>

    <div class="grid md:grid-cols-2 gap-8">
      <div class="p-4 border-[1px] border-black rounded-lg flex flex-col gap-3 items-start">
        <h2 class="text-2xl font-semibold">Highest recorded temperature in Pune since last two years</h2>
        <p>02 JUNE 2024 8:24 PM</p>
        <!-- Delete button -->
        <button class="bg-red-500 text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Delete</button>
      </div>
    </div>
  </div>
</main>

<?php include("../components/pageend.php") ?>