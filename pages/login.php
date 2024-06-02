<?php include("../components/pagestart.php") ?>
<div class="bg-neutral-100 min-h-[80svh]">
  <main class="container mx-auto px-6 py-12 flex flex-col items-center">
    <h1 class="text-4xl font-bold">Login</h1>
    <div class="py-8">
      <form action="" method="POST" class="bg-white p-8 rounded-lg">
        <div class="mb-4 min-w-[320px]">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-primary text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Login</button>
        </div>
      </form>

      <!-- Error message -->
      <!-- <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mt-4" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="block sm:inline">Something went wrong.</span>
      </div> -->

      <p class="mt-4">Don't have an account? <a href="register.php" class="text-primary">Register</a></p>
    </div>
  </main>
</div>
<?php include("../components/pageend.php") ?>