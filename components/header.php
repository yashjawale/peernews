<header class="bg-primary py-6 text-white sticky top-0">
  <nav class="container mx-auto px-6">
    <div class="flex justify-between">
      <a href="/peernews/index.php" class="text-2xl font-bold">PeerNews</a>

      <?php
      session_start();

      ?>

      <!-- Show logout button if logged in or show signup buttons -->
      <?php if (isset($_SESSION['user'])) : ?>
        <div class="flex gap-3 items-center">
          <p class="hidden md:block">Welcome, <?php echo $_SESSION['user']['name']; ?></p>
          <a href="/peernews/pages/dashboard.php" class="bg-white text-primary text-sm px-4 py-2 rounded-lg hover:opacity-70">Dashboard</a>
          <a href="/peernews/handlers/handlelogout.php" class="bg-red-500 text-white text-sm px-4 py-2 rounded-lg hover:opacity-70">Log Out</a>
        </div>
      <?php else : ?>
        <div class="flex gap-3 items-center">
          <p class="hidden md:block">Create an account to add your article.</p>
          <a href="/peernews/pages/register.php" class="bg-white text-primary text-sm px-4 py-2 rounded-lg hover:opacity-70">Sign Up</a>
          <a href="/peernews/pages/login.php" class="bg-white text-primary text-sm px-4 py-2 rounded-lg hover:opacity-70">Log In</a>
        </div>
      <?php endif; ?>

      <!-- <div class="flex gap-3 items-center">
        <p class="hidden md:block">Create an account to add your article.</p>
        <a href="/peernews/pages/register.php" class="bg-white text-primary text-sm px-4 py-2 rounded-lg hover:opacity-70">Sign Up</a>
        <a href="/peernews/pages/login.php" class="bg-white text-primary text-sm px-4 py-2 rounded-lg hover:opacity-70">Log In</a>
      </div> -->
    </div>
  </nav>
</header>