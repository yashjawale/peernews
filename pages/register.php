<?php include("../components/pagestart.php") ?>
<div class="bg-neutral-100">
  <main class="container mx-auto px-6 py-12 flex flex-col items-center">
    <h1 class="text-4xl font-bold">Register</h1>
    <div class="py-8">
      <form action="../handlers/handleregister.php" method="POST" class="bg-white p-8 rounded-lg">
        <div class="mb-4 min-w-[320px]">
          <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="name" id="name" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
          <input type="email" name="email" id="email" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
          <input type="password" name="password" id="password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
          <input type="password" name="confirm_password" id="confirm_password" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary-500 focus:border-primary-500 sm:text-sm" required>
        </div>
        <div class="mb-4">
          <button type="submit" class="bg-primary text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Register</button>
        </div>
      </form>

      <?php
      session_start();

      // print error messages
      if (isset($_SESSION['error'])) {
        echo '<div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg relative mt-4" role="alert">
            <strong class="font-bold">Error!</strong>
            <span class="block sm:inline">' . $_SESSION['error'] . '</span>
          </div>';
        unset($_SESSION['error']);
      }
      ?>

      <p class="mt-4">Already have an account? <a href="login.php" class="text-primary">Log In</a></p>
    </div>
  </main>
</div>
<?php include("../components/pageend.php") ?>