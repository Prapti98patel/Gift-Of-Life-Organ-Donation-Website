
<?php include 'header.php'; ?>

<!-- Hero Section -->
<section class="relative h-[300px] flex items-center justify-center text-center text-white">
  <img src="donor-bg.jpg" class="absolute inset-0 w-full h-full object-cover">
  <div class="absolute inset-0 bg-black/60"></div>
  <div class="relative z-10">
    <h1 class="text-4xl font-bold">Donor List</h1>
    <p>People who pledged to save lives</p>
  </div>
</section>

<!-- Donor List Table -->
<section class="py-20 px-6 bg-gray-100">
  <div class="max-w-6xl mx-auto bg-white p-6 rounded-2xl shadow">

    <h2 class="text-2xl font-bold mb-6">Registered Donors</h2>

    <div class="overflow-x-auto">
      <table class="w-full text-left border-collapse">
        <thead>
          <tr class="bg-orange-500 text-white">
            <th class="p-3">Name</th>
            <th class="p-3">Email</th>
            <th class="p-3">Phone</th>
            <th class="p-3">Organ</th>
            <th class="p-3">Location</th>
          </tr>
        </thead>
        <tbody class="text-gray-700">

          <!-- Dummy Data Row -->
          <tr class="border-b hover:bg-gray-50">
            <td class="p-3">Rahul Patel</td>
            <td class="p-3">rahul@email.com</td>
            <td class="p-3">+91 9876543210</td>
            <td class="p-3">Kidney</td>
            <td class="p-3">Ahmedabad</td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="p-3">Anjali Shah</td>
            <td class="p-3">anjali@email.com</td>
            <td class="p-3">+91 9123456780</td>
            <td class="p-3">Liver</td>
            <td class="p-3">Surat</td>
          </tr>

          <tr class="border-b hover:bg-gray-50">
            <td class="p-3">Amit Kumar</td>
            <td class="p-3">amit@email.com</td>
            <td class="p-3">+91 9988776655</td>
            <td class="p-3">Heart</td>
            <td class="p-3">Mumbai</td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="bg-orange-500 text-white text-center py-16">
  <h3 class="text-3xl font-bold mb-3">Become a Donor Today</h3>
  <p class="mb-5">Your one decision can save multiple lives</p>
  <a href="donate.php" class="bg-white text-orange-500 px-6 py-3 rounded-full">Donate Now</a>
</section>

<?php include 'footer.php'; ?>