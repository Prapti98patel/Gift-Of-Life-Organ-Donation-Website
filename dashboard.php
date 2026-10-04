<?php
session_start();

// Check admin login
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

// ✅ SAFE INCLUDE (fixes your error)
include __DIR__ . '/../config.php';

// Default values (avoid crash if table empty)
$donors = 0;
$requests = 0;
$appointments = 0;

// Fetch data safely
$result1 = $conn->query("SELECT COUNT(*) as total FROM donors");
if ($result1) {
  $donors = $result1->fetch_assoc()['total'];
}

$result2 = $conn->query("SELECT COUNT(*) as total FROM requests");
if ($result2) {
  $requests = $result2->fetch_assoc()['total'];
}

$result3 = $conn->query("SELECT COUNT(*) as total FROM appointments");
if ($result3) {
  $appointments = $result3->fetch_assoc()['total'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>

<script src="https://cdn.tailwindcss.com"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="bg-gray-100">

<div class="flex">

  <!-- Sidebar -->
  <div class="w-64 bg-gray-800 text-white min-h-screen p-5">
    <h2 class="text-2xl font-bold mb-8 text-orange-400">Admin Panel</h2>

    <a href="dashboard.php" class="block mb-3 hover:text-orange-400">Dashboard</a>
    <a href="donors.php" class="block mb-3 hover:text-orange-400">Donors</a>
    <a href="requests.php" class="block mb-3 hover:text-orange-400">Requests</a>
    <a href="appointments.php" class="block mb-3 hover:text-orange-400">Appointments</a>
    <a href="logout.php" class="block mt-6 text-red-400">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-6">

    <h1 class="text-3xl font-bold mb-6">Dashboard Overview</h1>

    <!-- Cards -->
    <div class="grid md:grid-cols-3 gap-6 mb-10">

      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Total Donors</h3>
        <p class="text-3xl font-bold text-orange-500"><?php echo $donors; ?></p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Total Requests</h3>
        <p class="text-3xl font-bold text-orange-500"><?php echo $requests; ?></p>
      </div>

      <div class="bg-white p-6 rounded-xl shadow">
        <h3 class="text-gray-500">Appointments</h3>
        <p class="text-3xl font-bold text-orange-500"><?php echo $appointments; ?></p>
      </div>

    </div>

    <!-- Chart -->
    <div class="bg-white p-6 rounded-xl shadow">
      <h2 class="text-xl font-bold mb-4">System Overview</h2>
      <canvas id="chart"></canvas>
    </div>

  </div>

</div>

<script>
const ctx = document.getElementById('chart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['Donors', 'Requests', 'Appointments'],
    datasets: [{
      label: 'Data Overview',
      data: [<?php echo $donors; ?>, <?php echo $requests; ?>, <?php echo $appointments; ?>],
      borderWidth: 1
    }]
  },
  options: {
    responsive: true,
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>

</body>
</html>