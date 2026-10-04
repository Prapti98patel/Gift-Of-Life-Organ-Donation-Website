<?php
$message = "";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $msg = $_POST['message'] ?? '';

  if ($name && $email && $msg) {
    $message = "Thank you, $name! Your message has been sent.";
  } else {
    $message = "Please fill all fields.";
  }
}
?>

<?php include 'header.php'; ?>

<!-- Hero -->
<section class="relative py-20 text-white text-center bg-cover bg-center"
        style="background-image: url('./uploads/bg-contact.png');">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-2xl mx-auto">
    <h2 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h2>
    <p class="text-lg">We’d love to hear from you</p>
  </div>

</section>

<!-- Contact Form -->
<section class="py-16 px-6 bg-gray-50">
  <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-10">

    <!-- Form -->
    <div class="bg-white p-8 rounded-lg shadow">

      <?php if ($message): ?>
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
          <?php echo $message; ?>
        </div>
      <?php endif; ?>

      <form method="POST" class="space-y-4">
        <div>
          <label class="block mb-1 font-semibold">Name</label>
          <input type="text" name="name" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div>
          <label class="block mb-1 font-semibold">Email</label>
          <input type="email" name="email" class="w-full border px-4 py-2 rounded" required>
        </div>

        <div>
          <label class="block mb-1 font-semibold">Message</label>
          <textarea name="message" rows="5" class="w-full border px-4 py-2 rounded" required></textarea>
        </div>

        <button type="submit" class="w-full bg-orange-500 text-white py-3 rounded-full">
          Send Message
        </button>
      </form>
    </div>

    <!-- Info -->
    <div class="flex flex-col justify-center">
      <h3 class="text-2xl font-bold mb-4">Get in Touch</h3>
      <p class="text-gray-600 mb-6">
        Have questions about organ donation? Reach out to us and we’ll help you.
      </p>

      <p class="mb-2"><strong>Email:</strong> info@giftoflife.com</p>
      <p class="mb-2"><strong>Phone:</strong> +123 456 7890</p>
      <p><strong>Address:</strong> Your City, Your Country</p>
    </div>

  </div>
</section>
<?php include 'footer.php'; ?>