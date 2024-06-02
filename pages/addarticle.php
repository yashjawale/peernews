<?php include("../components/pagestart.php") ?>

<main class="container mx-auto px-6 py-20 min-h-[80svh]">
  <!-- Edit article form -->
  <div class="md:w-11/12 lg:w-8/12">
    <h1 class="text-4xl font-bold">Add Article</h1>
    <div class="py-8">
      <form action="" method="POST" class="bg-white py-8 rounded-lg">
        <div class="mb-4 min-w-[320px]">
          <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
          <input type="text" name="title" id="title" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
          <textarea name="content" id="content" rows="8" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required></textarea>
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-primary text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Publish</button>
        </div>
      </form>
    </div>
</main>

<?php include("../components/pageend.php") ?>