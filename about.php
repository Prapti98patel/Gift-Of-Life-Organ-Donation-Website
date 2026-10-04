<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Gift Of Life</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

<!-- Navbar -->
<?php include 'header.php'; ?>

<!-- Hero -->
<section class="relative py-20 text-white text-center">

  <!-- Background Image -->
  <img src="./uploads/bg_about.jpeg" class="absolute inset-0 w-full h-full object-cover">

  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Content -->
  <div class="relative z-10 max-w-xl mx-auto">
    <h2 class="text-4xl font-bold mb-4">About Us</h2>
    <p>Learn more about our mission to save lives through organ donation.</p>
  </div>

</section>

<!-- About Content -->
<section class="py-16 px-8">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-10 items-center">
    
    <img src="./uploads/about.jpeg" class="rounded-lg shadow-lg" />

    <div>
      <h3 class="text-3xl font-bold mb-4">Who We Are</h3>
      <p class="text-gray-600 mb-4">
        Gift Of Life is an organ donation platform dedicated to connecting donors, patients, and hospitals. Our goal is to create awareness and make the donation process easy and accessible.
      </p>
      <p class="text-gray-600 mb-6">
        We believe that one donor can save multiple lives. Join us in making a difference.
      </p>
      <a href="#" class="bg-orange-500 text-white px-6 py-3 rounded-full">Join Us</a>
    </div>

  </div>
</section>

<!-- Mission & Vision -->
<section class="bg-gray-100 py-16 px-8">
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8 text-center">
    
    <div class="bg-white p-6 rounded-lg shadow">
      <h4 class="text-xl font-bold mb-2">Our Mission</h4>
      <p class="text-gray-600">To save lives by promoting organ donation awareness and connecting donors with recipients.</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
      <h4 class="text-xl font-bold mb-2">Our Vision</h4>
      <p class="text-gray-600">A world where no life is lost due to lack of organ donors.</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
      <h4 class="text-xl font-bold mb-2">Our Values</h4>
      <p class="text-gray-600">Compassion, Transparency, and Commitment to saving lives.</p>
    </div>

  </div>
</section>

<!-- Call To Action -->
<section class="py-20 text-center bg-orange-500 text-white">
  <h3 class="text-3xl font-bold mb-4">Become a Life Saver</h3>
  <p class="mb-6">Register today and help someone get a second chance at life.</p>
  <a href="#" class="bg-white text-orange-500 px-6 py-3 rounded-full">Register Now</a>
</section>

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
