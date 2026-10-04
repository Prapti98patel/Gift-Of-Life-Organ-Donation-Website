<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

include __DIR__ . '/../config.php';

// ✅ DELETE APPOINTMENT
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("DELETE FROM appointments WHERE id=$id");
}

// ✅ UPDATE STATUS
if (isset($_GET['status']) && isset($_GET['id'])) {
  $id = $_GET['id'];
  $status = $_GET['status'];

  $conn->query("UPDATE appointments SET status='$status' WHERE id=$id");
}

// ✅ FETCH DATA
$appointments = $conn->query("SELECT * FROM appointments ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Appointments</title>

<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex">

  <!-- Sidebar -->
  <div class="w-64 bg-gray-800 text-white min-h-screen p-5">
    <h2 class="text-2xl font-bold mb-8 text-orange-400">Admin Panel</h2>

    <a href="dashboard.php" class="block mb-3 hover:text-orange-400">Dashboard</a>
    <a href="donors.php" class="block mb-3 hover:text-orange-400">Donors</a>
    <a href="requests.php" class="block mb-3 hover:text-orange-400">Requests</a>
    <a href="appointments.php" class="block mb-3 text-orange-400">Appointments</a>
    <a href="logout.php" class="block mt-6 text-red-400">Logout</a>
  </div>

  <!-- Main Content -->
  <div class="flex-1 p-6">

    <h1 class="text-3xl font-bold mb-6">Appointments</h1>

    <div class="bg-white p-6 rounded-xl shadow">

      <div class="overflow-x-auto">
        <table class="w-full text-left">

          <thead>
            <tr class="bg-gray-200">
              <th class="p-2">ID</th>
              <th class="p-2">Name</th>
              <th class="p-2">Email</th>
              <th class="p-2">Date</th>
              <th class="p-2">Time</th>
              <th class="p-2">Hospital</th>
              <th class="p-2">Status</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>

          <tbody>

            <?php while($row = $appointments->fetch_assoc()): ?>
            <tr class="border-b hover:bg-gray-50">

              <td class="p-2"><?php echo $row['id']; ?></td>
              <td class="p-2"><?php echo $row['name']; ?></td>
              <td class="p-2"><?php echo $row['email']; ?></td>
              <td class="p-2"><?php echo $row['date']; ?></td>
              <td class="p-2"><?php echo $row['time']; ?></td>
              <td class="p-2"><?php echo $row['hospital']; ?></td>

              <!-- Status -->
              <td class="p-2">
                <?php if(isset($row['status'])): ?>
                  <span class="px-2 py-1 rounded text-white 
                    <?php echo ($row['status']=='Approved') ? 'bg-green-500' : 'bg-yellow-500'; ?>">
                    <?php echo $row['status']; ?>
                  </span>
                <?php else: ?>
                  <span class="px-2 py-1 bg-gray-400 text-white rounded">Pending</span>
                <?php endif; ?>
              </td>

              <!-- Actions -->
              <td class="p-2 space-x-2">

                <a href="?id=<?php echo $row['id']; ?>&status=Approved"
                   class="bg-green-500 text-white px-2 py-1 rounded text-sm">
                   Approve
                </a>

                <a href="?delete=<?php echo $row['id']; ?>"
                   onclick="return confirm('Delete this appointment?')"
                   class="bg-red-500 text-white px-2 py-1 rounded text-sm">
                   Delete
                </a>

              </td>

            </tr>
            <?php endwhile; ?>

          </tbody>

        </table>
      </div>

    </div>

  </div>

</div>

</body>
</html>