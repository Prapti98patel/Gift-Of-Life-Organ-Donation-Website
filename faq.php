<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[320px] flex items-center justify-center text-center text-white">
  <img src="./uploads/Untitled design (1).png" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">FAQs</h1>
    <p>Frequently Asked Questions</p>
  </div>
</section>

<!-- FAQ Section -->
<section class="py-20 px-6 bg-gray-100">
  <div class="max-w-3xl mx-auto">

    <h2 class="text-3xl font-bold text-center mb-10">Common Questions</h2>

    <div class="space-y-4">

      <!-- Item -->
      <div class="bg-white rounded-xl shadow overflow-hidden">
        <button onclick="toggleFAQ(1)" class="w-full flex justify-between items-center px-6 py-4 font-semibold">
          What is organ donation?
          <span id="icon-1">+</span>
        </button>
        <div id="faq-1" class="hidden px-6 pb-4 text-gray-600">
          Organ donation is the process of giving an organ to save or improve someone else's life.
        </div>
      </div>

      <div class="bg-white rounded-xl shadow overflow-hidden">
        <button onclick="toggleFAQ(2)" class="w-full flex justify-between items-center px-6 py-4 font-semibold">
          Who can become a donor?
          <span id="icon-2">+</span>
        </button>
        <div id="faq-2" class="hidden px-6 pb-4 text-gray-600">
          Almost anyone can become a donor regardless of age or background.
        </div>
      </div>

      <div class="bg-white rounded-xl shadow overflow-hidden">
        <button onclick="toggleFAQ(3)" class="w-full flex justify-between items-center px-6 py-4 font-semibold">
          Is organ donation safe?
          <span id="icon-3">+</span>
        </button>
        <div id="faq-3" class="hidden px-6 pb-4 text-gray-600">
          Yes, it is conducted by medical professionals under strict guidelines.
        </div>
      </div>

      <div class="bg-white rounded-xl shadow overflow-hidden">
        <button onclick="toggleFAQ(4)" class="w-full flex justify-between items-center px-6 py-4 font-semibold">
          How can I register?
          <span id="icon-4">+</span>
        </button>
        <div id="faq-4" class="hidden px-6 pb-4 text-gray-600">
          You can register through our donation page by filling out the form.
        </div>
      </div>

    </div>

  </div>
</section>

<script>
function toggleFAQ(id) {
  const content = document.getElementById('faq-' + id);
  const icon = document.getElementById('icon-' + id);

  if (content.classList.contains('hidden')) {
    content.classList.remove('hidden');
    icon.innerText = '−';
  } else {
    content.classList.add('hidden');
    icon.innerText = '+';
  }
}
</script>

<?php include 'footer.php'; ?>