<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[350px] flex items-center justify-center text-center text-white">
  <img src="./uploads/bg-blog.jpeg" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">Our Blog</h1>
    <p>Latest news & awareness about organ donation</p>
  </div>
</section>

<!-- Blog Section -->
<section class="py-20 bg-gray-100 px-6">
  <div class="max-w-7xl mx-auto">

    <div class="grid md:grid-cols-3 gap-10">

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow overflow-hidden hover:shadow-xl transition">
        <img src="./uploads/blog-1.png" class="w-full h-48 object-cover">
        <div class="p-6">
          <p class="text-sm text-gray-500 mb-2">March 2026</p>
          <h3 class="text-xl font-bold mb-2">Importance of Organ Donation</h3>
          <p class="text-gray-600 text-sm mb-4">Learn how organ donation can save lives and why it is important.</p>
          <a href="#" class="text-orange-500 font-semibold">Read More →</a>
        </div>
      </div>

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow overflow-hidden hover:shadow-xl transition">
        <img src="./uploads/blog-2.png" class="w-full h-48 object-cover">
        <div class="p-6">
          <p class="text-sm text-gray-500 mb-2">March 2026</p>
          <h3 class="text-xl font-bold mb-2">How to Become a Donor</h3>
          <p class="text-gray-600 text-sm mb-4">Step-by-step guide to register as an organ donor.</p>
          <a href="#" class="text-orange-500 font-semibold">Read More →</a>
        </div>
      </div>

      <!-- Blog Card -->
      <div class="bg-white rounded-2xl shadow overflow-hidden hover:shadow-xl transition">
        <img src="./uploads/blog-3.png" class="w-full h-48 object-cover">
        <div class="p-6">
          <p class="text-sm text-gray-500 mb-2">March 2026</p>
          <h3 class="text-xl font-bold mb-2">Myths About Organ Donation</h3>
          <p class="text-gray-600 text-sm mb-4">Common myths and facts you should know.</p>
          <a href="#" class="text-orange-500 font-semibold">Read More →</a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-orange-500 text-white text-center py-16">
  <h3 class="text-3xl font-bold mb-3">Stay Connected</h3>
  <p class="mb-5">Join our mission and spread awareness</p>
  <a href="donate.php" class="bg-white text-orange-500 px-6 py-3 rounded-full">Donate Now</a>
</section>

<?php include 'footer.php'; ?>