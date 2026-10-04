<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $organ = $_POST['organ'] ?? '';
  $phone = $_POST['phone'] ?? '';

  if ($name && $organ && $phone) {
    $message = "Request submitted successfully. We will contact you soon.";
  } else {
    $message = "Please fill all fields.";
  }
}
?>

<?php
// ✅ ADD THIS (Database Connection)
include __DIR__ . '/../config.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $organ = $_POST['organ'] ?? '';
  $phone = $_POST['phone'] ?? '';
  $details = $_POST['message'] ?? '';

  if ($name && $organ && $phone) {

    // ✅ INSERT INTO DATABASE
    $stmt = $conn->prepare("INSERT INTO requests (name, organ, phone, message) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $organ, $phone, $details);

    if ($stmt->execute()) {
      $message = "Request submitted successfully. We will contact you soon.";
    } else {
      $message = "Error saving request. Try again.";
    }

    $stmt->close();

  } else {
    $message = "Please fill all fields.";
  }
}
?>
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[320px] flex items-center justify-center text-center text-white">
  <img src="./uploads/donor.png" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10 text-black">
    <h1 class="text-4xl font-bold">Request an Organ</h1>
    <p>Submit your request and we will help you</p>
  </div>
</section>

<!-- Request Form -->
<section class="py-20 bg-gray-100 px-6">
  <div class="max-w-2xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h2 class="text-2xl font-bold mb-6 text-center">Organ Request Form</h2>

    <?php if ($message): ?>
      <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">

      <input type="text" name="name" placeholder="Full Name" class="w-full border px-4 py-3 rounded" required>

      <select name="organ" class="w-full border px-4 py-3 rounded" required>
        <option value="">Select Organ</option>
        <option>Kidney</option>
        <option>Liver</option>
        <option>Heart</option>
        <option>Lungs</option>
      </select>

      <input type="text" name="phone" placeholder="Phone Number" class="w-full border px-4 py-3 rounded" required>

      <textarea name="message" placeholder="Additional Details" class="w-full border px-4 py-3 rounded"></textarea>

      <button class="w-full bg-orange-500 text-white py-3 rounded-full hover:bg-orange-600">
        Submit Request
      </button>

    </form>

  </div>
</section>

<!-- CTA -->
<section class="bg-orange-500 text-white text-center py-16">
  <h3 class="text-3xl font-bold mb-3">Need Urgent Help?</h3>
  <p class="mb-5">Contact our team for immediate assistance</p>
  <a href="contact.php" class="bg-white text-orange-500 px-6 py-3 rounded-full">Contact Us</a>
</section>

<?php include 'footer.php'; ?>