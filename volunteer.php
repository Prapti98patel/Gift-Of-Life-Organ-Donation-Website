<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $phone = $_POST['phone'] ?? '';

  if ($name && $email && $phone) {
    $message = "Thank you, $name! You have successfully applied as a volunteer.";
  } else {
    $message = "Please fill all fields.";
  }
}
?>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[350px] flex items-center justify-center text-center text-white">
  <img src="./uploads/gettyimages-593288984-640x640.jpg" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">Become a Volunteer</h1>
    <p>Join us in saving lives</p>
  </div>
</section>

<!-- Content Section -->
<section class="py-20 px-6 bg-white">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- Image -->
    <img src="./uploads/wmremove-transformed.jpeg" class="rounded-2xl shadow-lg">

    <!-- Text -->
    <div>
      <h2 class="text-3xl font-bold mb-4">Why Volunteer With Us?</h2>
      <p class="text-gray-600 mb-6">Your support can help save lives. Volunteers play a key role in spreading awareness and connecting donors.</p>

      <ul class="space-y-3 mb-6">
        <li>✔ Help save lives</li>
        <li>✔ Gain meaningful experience</li>
        <li>✔ Be part of a global mission</li>
        <li>✔ Make real impact</li>
      </ul>
    </div>

  </div>
</section>

<!-- Form Section -->
<section class="py-20 bg-gray-100 px-6">
  <div class="max-w-xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h3 class="text-2xl font-bold mb-6 text-center">Volunteer Registration</h3>

    <?php if ($message): ?>
      <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>

    <form method="POST" class="space-y-4">
      <input type="text" name="name" placeholder="Full Name" class="w-full border px-4 py-3 rounded" required>
      <input type="email" name="email" placeholder="Email Address" class="w-full border px-4 py-3 rounded" required>
      <input type="text" name="phone" placeholder="Phone Number" class="w-full border px-4 py-3 rounded" required>

      <button class="w-full bg-orange-500 text-white py-3 rounded-full hover:bg-orange-600">
        Apply Now
      </button>
    </form>

  </div>
</section>

<!-- CTA -->
<section class="bg-orange-500 text-white text-center py-16">
  <h3 class="text-3xl font-bold mb-3">Together We Can Make Difference</h3>
  <p class="mb-5">Join our volunteer team today</p>
  <a href="donate.php" class="bg-white text-orange-500 px-6 py-3 rounded-full">Donate Now</a>
</section>

<?php include 'footer.php'; ?>