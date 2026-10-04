<?php
// Dummy user data (later connect with database)
$user = [
  'name' => 'John Doe',
  'email' => 'john@example.com',
  'phone' => '+91 9876543210',
  'organ' => 'Kidney',
  'status' => 'Registered'
];
?>

<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[300px] flex items-center justify-center text-center text-white">
  <img src="profile-bg.jpg" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">My Profile</h1>
    <p>Manage your donation details</p>
  </div>
</section>

<!-- Profile Section -->
<section class="py-20 bg-gray-100 px-6">
  <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow">

    <h2 class="text-2xl font-bold mb-6 text-center">Donor Information</h2>

    <div class="space-y-4 text-gray-700">
      <p><strong>Name:</strong> <?php echo $user['name']; ?></p>
      <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
      <p><strong>Phone:</strong> <?php echo $user['phone']; ?></p>
      <p><strong>Selected Organ:</strong> <?php echo $user['organ']; ?></p>
      <p>
        <strong>Status:</strong> 
        <span class="text-green-600 font-semibold"><?php echo $user['status']; ?></span>
      </p>
    </div>

    <!-- Buttons -->
    <div class="mt-8 flex gap-4 justify-center">
      <button class="bg-orange-500 text-white px-6 py-2 rounded-full hover:bg-orange-600">
        Edit Profile
      </button>
      <button class="bg-gray-300 px-6 py-2 rounded-full">
        Logout
      </button>
    </div>

  </div>
</section>

<!-- Donation Status Tracker -->
<section class="py-16 bg-white px-6">
  <div class="max-w-4xl mx-auto text-center">
    <h2 class="text-2xl font-bold mb-8">Donation Status</h2>

    <div class="flex justify-between items-center">
      <div class="flex-1">
        <div class="w-10 h-10 bg-green-500 text-white rounded-full flex items-center justify-center mx-auto">✓</div>
        <p class="mt-2 text-sm">Registered</p>
      </div>

      <div class="flex-1">
        <div class="w-10 h-10 bg-yellow-400 text-white rounded-full flex items-center justify-center mx-auto">⏳</div>
        <p class="mt-2 text-sm">Under Review</p>
      </div>

      <div class="flex-1">
        <div class="w-10 h-10 bg-gray-300 text-white rounded-full flex items-center justify-center mx-auto">❤️</div>
        <p class="mt-2 text-sm">Matched</p>
      </div>
    </div>

  </div>
</section>

<?php include 'footer.php'; ?>