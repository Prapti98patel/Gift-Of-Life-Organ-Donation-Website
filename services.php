<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[400px] flex items-center justify-center text-center text-white">
  <img src="./uploads/bg-services.jpeg" class="absolute inset-0 w-full h-full object-cover" />
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl md:text-5xl font-bold mb-3">Our Services</h1>
    <p class="text-lg">Saving Lives Through Innovation & Care</p>
  </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Section Title -->
    <div class="text-center mb-16">
      <p class="text-orange-500 font-semibold uppercase tracking-widest">What We Do</p>
      <h2 class="text-3xl md:text-4xl font-bold">Our Core Services</h2>
    </div>

    <!-- Services Grid -->
    <div class="grid md:grid-cols-3 gap-10">

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/service.jpeg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Organ Donation</h3>
          <p class="text-gray-600 text-sm">Register as a donor and give the gift of life to those in need.</p>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/hospital.jpeg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Hospital Network</h3>
          <p class="text-gray-600 text-sm">We connect patients with trusted hospitals and medical experts.</p>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/istockphoto-1129543554-1024x1024.jpg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Emergency Support</h3>
          <p class="text-gray-600 text-sm">Fast response system for urgent organ requirements.</p>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/Awer.jpeg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Awareness Campaigns</h3>
          <p class="text-gray-600 text-sm">Spreading knowledge and awareness about organ donation.</p>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/program.jpg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Volunteer Programs</h3>
          <p class="text-gray-600 text-sm">Join our mission and help save lives as a volunteer.</p>
        </div>
      </div>

      <!-- Card -->
      <div class="group bg-gray-50 rounded-2xl overflow-hidden shadow hover:shadow-xl transition">
        <img src="./uploads/s6.jpeg" class="w-full h-48 object-cover">
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2 group-hover:text-orange-500">Donor Management</h3>
          <p class="text-gray-600 text-sm">Secure system to manage and track donor information.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gray-100">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

    <div>
      <h2 class="text-3xl font-bold mb-4">Why Choose Gift Of Life?</h2>
      <p class="text-gray-600 mb-6">We are committed to saving lives through a transparent, fast, and reliable organ donation system.</p>

      <ul class="space-y-3">
        <li>✔ Trusted medical network</li>
        <li>✔ Fast & secure process</li>
        <li>✔ Global reach</li>
        <li>✔ 24/7 support</li>
      </ul>
    </div>

    <img src="./uploads/bg-donate.jpeg" class="rounded-2xl shadow-lg">

  </div>
</section>

<!-- CTA -->
<section class="bg-orange-500 text-white text-center py-20">
  <h3 class="text-3xl font-bold mb-4">Together We Can Save Lives</h3>
  <p class="mb-6">Become a donor today and make a difference</p>
  <a href="donate.php" class="bg-white text-orange-500 px-8 py-3 rounded-full font-semibold">Donate Now</a>
</section>

<?php include 'footer.php'; ?>