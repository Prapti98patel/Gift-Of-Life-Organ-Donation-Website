<?php
// Simple form handling (no database yet)
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $organ = $_POST['organ'] ?? '';

    if ($name && $email && $organ) {
        $message = "Thank you, $name! Your donation pledge has been received.";
    } else {
        $message = "Please fill all fields.";
    }
}
?>

<?php
// ✅ ADD THIS (Database Connection)
include '../config.php';

// Simple form handling
$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $organ = $_POST['organ'] ?? '';

    if ($name && $email && $organ) {

        // ✅ INSERT INTO DATABASE
        $stmt = $conn->prepare("INSERT INTO donors (name, email, organ) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $organ);

        if ($stmt->execute()) {
            $message = "Thank you, $name! Your donation pledge has been received.";
        } else {
            $message = "Error saving data. Try again.";
        }

        $stmt->close();

    } else {
        $message = "Please fill all fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Donate - Gift Of Life</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-50">

<!-- Navbar -->
<?php include 'header.php'; ?>

<!-- Hero -->
<section class="relative py-20 text-white text-center bg-cover bg-center"
        style="background-image: url('./uploads/bg-donate.jpeg');">

  <!-- Gradient Overlay -->
  <div class="absolute inset-0 bg-gradient-to-r from-orange-600/80 to-black/70"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-2xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">Become an Organ Donor</h2>
    <p class="text-lg">Save lives by pledging your organs</p>
  </div>

</section>

<!-- Form Section -->
<section class="py-16 px-6">
  <div class="max-w-xl mx-auto bg-white p-8 rounded-lg shadow">

    <?php if ($message): ?>
      <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <div>
        <label class="block mb-1 font-semibold">Full Name</label>
        <input type="text" name="name" class="w-full border px-4 py-2 rounded" required>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Email</label>
        <input type="email" name="email" class="w-full border px-4 py-2 rounded" required>
      </div>

      <div>
        <label class="block mb-1 font-semibold">Select Organ</label>
        <select name="organ" class="w-full border px-4 py-2 rounded" required>
          <option value="">-- Choose --</option>
          <option>Heart</option>
          <option>Kidney</option>
          <option>Liver</option>
          <option>Lungs</option>
          <option>Eyes</option>
        </select>
      </div>

      <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-full">
        Submit Donation
      </button>
    </form>

  </div>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>