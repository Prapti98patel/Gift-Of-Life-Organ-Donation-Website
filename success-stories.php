<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[320px] flex items-center justify-center text-center text-white">
  <img src="./uploads/success.png" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">Success Stories</h1>
    <p>Real lives saved through organ donation</p>
  </div>
</section>

<!-- Stories Section -->
<section class="py-20 px-6 bg-gray-100">
  <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-10">

    <!-- Story Card -->
    <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
      <img src="./uploads/men-1.jpeg" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Hiren's Second Life</h3>
        <p class="text-gray-600 text-sm mb-4">After receiving a kidney transplant, Rahul got a second chance at life and now spreads awareness.</p>
        <span class="text-orange-500 font-semibold">Kidney Transplant</span>
      </div>
    </div>

    <!-- Story Card -->
    <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
      <img src="./uploads/men-2.jpeg" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Jaimin’s Hope</h3>
        <p class="text-gray-600 text-sm mb-4">Jaimin’s father survived due to timely liver donation. Their family now encourages others.</p>
        <span class="text-orange-500 font-semibold">Liver Donation</span>
      </div>
    </div>

    <!-- Story Card -->
    <div class="bg-white rounded-2xl shadow hover:shadow-xl transition overflow-hidden">
      <img src="./uploads/WhatsApp Image 2025-12-22 at 3.58.11 AM.jpeg" class="w-full h-48 object-cover">
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Harsh’s New Beginning</h3>
        <p class="text-gray-600 text-sm mb-4">A heart transplant gave Amit a new beginning and a chance to live his dreams again.</p>
        <span class="text-orange-500 font-semibold">Heart Transplant</span>
      </div>
    </div>

  </div>
</section>

<!-- CTA Section -->
<section class="bg-orange-500 text-white text-center py-16">
  <h3 class="text-3xl font-bold mb-3">Be the Reason Someone Smiles Again</h3>
  <p class="mb-5">Your decision can create a success story</p>
  <a href="donate.php" class="bg-white text-orange-500 px-6 py-3 rounded-full">Donate Now</a>
</section>

<?php include 'footer.php'; ?>