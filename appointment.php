<?php
include __DIR__ . '/../config.php';

$message = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $date = $_POST['date'] ?? '';
  $time = $_POST['time'] ?? '';
  $hospital = $_POST['hospital'] ?? '';

  if ($name && $email && $date && $time && $hospital) {

    // ✅ INSERT INTO DATABASE
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, date, time, hospital) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $date, $time, $hospital);

    if ($stmt->execute()) {
      $message = "Appointment booked successfully!";
    } else {
      $message = "Error booking appointment.";
    }

    $stmt->close();

  } else {
    $message = "Please fill all fields.";
  }
}
?>

<?php if ($message): ?>
  <div class="mb-4 p-3 bg-green-100 text-green-700 rounded text-center">
    <?php echo $message; ?>
  </div>
<?php endif; ?>

<?php include 'header.php'; ?>

<!-- Appointment Booking Section -->
<section class="py-20 bg-gray-100 px-6">
  <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow">
    <h2 class="text-3xl font-bold mb-6 text-center">Book an Appointment</h2>

    <form method="POST" class="grid md:grid-cols-2 gap-4">

  <input type="text" name="name" placeholder="Full Name" class="border px-4 py-3 rounded w-full" required>

  <input type="email" name="email" placeholder="Email" class="border px-4 py-3 rounded w-full" required>

  <input type="date" name="date" class="border px-4 py-3 rounded w-full" required>

  <input type="time" name="time" class="border px-4 py-3 rounded w-full" required>

  <select name="hospital" class="border px-4 py-3 rounded w-full md:col-span-2" required>
    <option value="">Select Hospital</option>
    <option>City Hospital</option>
    <option>Life Care Center</option>
  </select>

  <button type="submit" class="md:col-span-2 bg-orange-500 text-white py-3 rounded-full">
    Book Appointment
  </button>

</form>
  </div>
</section>

<!-- Testimonials Section -->
<section class="py-20 bg-white px-6">
  <div class="max-w-6xl mx-auto">

    <div class="text-center mb-12">
      <h2 class="text-3xl font-bold">Success Stories</h2>
      <p class="text-gray-600">Lives changed through organ donation</p>
    </div>

    <div class="grid md:grid-cols-3 gap-8">

      <!-- Card -->
      <div class="bg-gray-100 p-6 rounded-xl shadow">
        <p class="text-gray-600 mb-4">“I received a kidney transplant and got a second life.”</p>
        <h4 class="font-bold">Rahul Patel</h4>
      </div>

      <!-- Card -->
      <div class="bg-gray-100 p-6 rounded-xl shadow">
        <p class="text-gray-600 mb-4">“Organ donation saved my father's life.”</p>
        <h4 class="font-bold">Anjali Shah</h4>
      </div>

      <!-- Card -->
      <div class="bg-gray-100 p-6 rounded-xl shadow">
        <p class="text-gray-600 mb-4">“Proud to be a donor and help others live.”</p>
        <h4 class="font-bold">Amit Kumar</h4>
      </div>

    </div>

  </div>
</section>

<?php include 'footer.php'; ?>
