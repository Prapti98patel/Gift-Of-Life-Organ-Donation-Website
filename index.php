<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gift Of Life</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans">

<!-- Navbar -->
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[500px] flex items-center justify-center text-center text-white">
  <img src="./uploads/aiease_1773994350606.jpg" class="absolute inset-0 w-full h-full object-cover" />
  <!-- <div class="absolute inset-0 bg-gradient-to-r from-orange-600 to-yellow-500 opacity-80"></div> -->
  
  <div class="relative z-10 max-w-2xl">
    <h2 class="text-4xl md:text-5xl font-bold mb-4 text-black">Give a Helping Hand to Those who Need It</h2>
    <p class="mb-6 text-black">We are always open for saving lives through organ donation</p>
    <a href="about.php" class="bg-orange-500 px-6 py-3 rounded-full">Learn More</a>
  </div>
</section>

<!-- Services Section -->
<section class="py-16 px-8 bg-gray-50">
  <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
    
    <div>
      <h3 class="text-xl font-bold mb-3">Connects Donors & Patients</h3>
      <p class="text-gray-600 mb-4">Helping people find life-saving organ donors worldwide.</p>
      <a href="donate.php" class="border border-orange-500 text-orange-500 px-4 py-2 rounded-full">Donate Now</a>
    </div>

    <div class="space-y-4">
      <div class="flex gap-3">
        <div class="text-orange-500">❤️</div>
        <div>
          <h4 class="font-semibold">Organ Donation</h4>
          <p class="text-sm text-gray-500">Register and pledge your organs to save lives.</p>
        </div>
      </div>

      <div class="flex gap-3">
        <div class="text-blue-500">🏥</div>
        <div>
          <h4 class="font-semibold">Medical Help</h4>
          <p class="text-sm text-gray-500">Support patients in urgent need of organs.</p>
        </div>
      </div>
    </div>

    <div class="space-y-4">
      <div class="flex gap-3">
        <div class="text-yellow-500">💧</div>
        <div>
          <h4 class="font-semibold">Awareness</h4>
          <p class="text-sm text-gray-500">Spread awareness about organ donation.</p>
        </div>
      </div>

      <div class="flex gap-3">
        <div class="text-green-500">🎓</div>
        <div>
          <h4 class="font-semibold">Education</h4>
          <p class="text-sm text-gray-500">Educating communities about donation benefits.</p>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- About Section -->
<section class="py-20 px-8 bg-white">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- Image with overlay -->
    <div class="relative">
      <img src="./uploads/bg_home.jpg" class="rounded-lg shadow-lg w-full" />
      
      <!-- Orange Brush Overlay -->
      <div class="absolute bottom-6 left-6 bg-orange-500 text-white px-6 py-4 rounded-lg shadow-lg">
        <h3 class="font-bold text-lg">255,300+ Children in Need</h3>
        <p class="text-sm">Become a donor</p>
      </div>
    </div>

    <!-- Content -->
    <div>
      <p class="text-orange-500 font-semibold uppercase mb-2">Safe + Easy Donations</p>
      <h2 class="text-3xl md:text-4xl font-bold mb-4">Helping Today. Helping Tomorrow</h2>
      <p class="text-gray-600 mb-6">
        Gift Of Life connects donors, patients, and hospitals worldwide. We help save lives by making organ donation simple, accessible, and impactful.
      </p>

      <div class="flex gap-4">
        <a href="about.php" class="bg-orange-500 text-white px-6 py-3 rounded-full">Learn More</a>
        <a href="volunteer.php" class="text-orange-500 font-semibold">Our Volunteers →</a>
      </div>
    </div>

  </div>
</section>

<!-- Volunteer Section -->
<section class="py-20 px-8 bg-gray-100">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-12 items-center">

    <!-- Image -->
    <div>
      <img src="./uploads/volunteer.jpg" alt="Volunteer" class="w-full object-cover" />
    </div>

    <!-- Content -->
    <div>
      <p class="text-orange-500 font-semibold uppercase tracking-widest mb-2">Become a Volunteer</p>
      <h2 class="text-3xl md:text-4xl font-bold mb-6">Why We Need You</h2>

      <!-- Accordion -->
      <div class="space-y-4">

        <!-- Item 1 -->
        <div class="border rounded-full overflow-hidden">
          <button onclick="toggleAccordion(1)" class="w-full flex justify-between items-center px-6 py-3 bg-orange-500 text-white">
            Donor satisfaction is guaranteed
            <span id="icon-1">−</span>
          </button>
          <div id="content-1" class="px-6 py-4 text-gray-600">
            We ensure a transparent and smooth organ donation process that benefits both donors and recipients.
          </div>
        </div>

        <!-- Item 2 -->
        <div class="border rounded-full overflow-hidden">
          <button onclick="toggleAccordion(2)" class="w-full flex justify-between items-center px-6 py-3">
            We help nonprofits become more effective
            <span id="icon-2">+</span>
          </button>
          <div id="content-2" class="hidden px-6 py-4 text-gray-600">
            Our system connects hospitals, donors, and patients efficiently.
          </div>
        </div>

        <!-- Item 3 -->
        <div class="border rounded-full overflow-hidden">
          <button onclick="toggleAccordion(3)" class="w-full flex justify-between items-center px-6 py-3">
            We're quick and nimble. We're truly global
            <span id="icon-3">+</span>
          </button>
          <div id="content-3" class="hidden px-6 py-4 text-gray-600">
            Our network operates worldwide to save lives faster.
          </div>
        </div>

        <!-- Item 4 -->
        <div class="border rounded-full overflow-hidden">
          <button onclick="toggleAccordion(4)" class="w-full flex justify-between items-center px-6 py-3">
            We help companies give well
            <span id="icon-4">+</span>
          </button>
          <div id="content-4" class="hidden px-6 py-4 text-gray-600">
            Partnering with organizations to maximize impact.
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<script>
function toggleAccordion(id) {
  const content = document.getElementById('content-' + id);
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

<!-- Footer -->
<?php include 'footer.php'; ?>

</body>
</html>
