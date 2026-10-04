<?php
session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = $_POST['username'];
  $pass = $_POST['password'];

  if ($user == 'admin' && $pass == '1234') {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
    exit();
  } else {
    $error = "Invalid Username or Password!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Login - Gift Of Life</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <!-- Login Card -->
  <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">

    <!-- Title -->
    <div class="text-center mb-6">
      <h2 class="text-3xl font-bold text-orange-500">Admin Login</h2>
      <p class="text-gray-500 text-sm">Gift Of Life Panel</p>
    </div>

    <!-- Error Message -->
    <?php if ($error): ?>
      <div class="bg-red-100 text-red-600 p-3 rounded mb-4 text-sm">
        <?php echo $error; ?>
      </div>
    <?php endif; ?>

    <!-- Form -->
    <form method="POST" class="space-y-4">

      <!-- Username -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Username</label>
        <input type="text" name="username" required
               class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>

      <!-- Password -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Password</label>
        <input type="password" name="password" required
               class="w-full border px-4 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-400">
      </div>

      <!-- Button -->
      <button type="submit"
              class="w-full bg-orange-500 text-white py-2 rounded-lg hover:bg-orange-600 transition">
        Login
      </button>

    </form>

    <!-- Footer -->
    <p class="text-center text-sm text-gray-500 mt-6">
      © 2026 Gift Of Life
    </p>

  </div>

</body>
</html>