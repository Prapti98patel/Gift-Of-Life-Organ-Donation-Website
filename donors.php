<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

include __DIR__ . '/../config.php';

// ✅ ADD DONOR
if (isset($_POST['add'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $organ = $_POST['organ'];
  $location = $_POST['location'];

  $conn->query("INSERT INTO donors (name,email,phone,organ,location)
                VALUES ('$name','$email','$phone','$organ','$location')");
}

// ✅ DELETE DONOR
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $conn->query("DELETE FROM donors WHERE id=$id");
}

// ✅ FETCH DONORS
$donors = $conn->query("SELECT * FROM donors ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Manage Donors</title>

<script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="flex">

  <!-- Sidebar -->
  <div class="w-64 bg-gray-800 text-white min-h-screen p-5">
    <h2 class="text-2xl font-bold mb-8 text-orange-400">Admin Panel</h2>

    <a href="dashboard.php" class="block mb-3 hover:text-orange-400">Dashboard</a>
    <a href="donors.php" class="block mb-3 text-orange-400">Donors</a>
    <a href="requests.php" class="block mb-3 hover:text-orange-400">Requests</a>
    <a href="appointments.php" class="block mb-3 hover:text-orange-400">Appointments</a>
    <a href="logout.php" class="block mt-6 text-red-400">Logout</a>
  </div>

  <!-- Main -->
  <div class="flex-1 p-6">

    <h1 class="text-3xl font-bold mb-6">Manage Donors</h1>

    <!-- ADD FORM -->
    <div class="bg-white p-6 rounded-xl shadow mb-8">
      <h2 class="text-xl font-bold mb-4">Add Donor</h2>

      <form method="POST" class="grid md:grid-cols-3 gap-4">

        <input type="text" name="name" placeholder="Name" required class="border p-2 rounded">
        <input type="email" name="email" placeholder="Email" required class="border p-2 rounded">
        <input type="text" name="phone" placeholder="Phone" required class="border p-2 rounded">

        <input type="text" name="organ" placeholder="Organ" required class="border p-2 rounded">
        <input type="text" name="location" placeholder="Location" required class="border p-2 rounded">

        <button name="add" class="bg-orange-500 text-white rounded px-4 py-2">
          Add Donor
        </button>

      </form>
    </div>

    <!-- TABLE -->
    <div class="bg-white p-6 rounded-xl shadow">

      <h2 class="text-xl font-bold mb-4">All Donors</h2>

      <div class="overflow-x-auto">
        <table class="w-full text-left">

          <thead>
            <tr class="bg-gray-200">
              <th class="p-2">ID</th>
              <th class="p-2">Name</th>
              <th class="p-2">Email</th>
              <th class="p-2">Phone</th>
              <th class="p-2">Organ</th>
              <th class="p-2">Location</th>
              <th class="p-2">Action</th>
            </tr>
          </thead>

          <tbody>

            <?php while($row = $donors->fetch_assoc()): ?>
            <tr class="border-b hover:bg-gray-50">
              <td class="p-2"><?php echo $row['id']; ?></td>
              <td class="p-2"><?php echo $row['name']; ?></td>
              <td class="p-2"><?php echo $row['email']; ?></td>
              <td class="p-2"><?php echo $row['phone']; ?></td>
              <td class="p-2"><?php echo $row['organ']; ?></td>
              <td class="p-2"><?php echo $row['location']; ?></td>
              <td class="p-2">
                <a href="?delete=<?php echo $row['id']; ?>" 
                   class="bg-red-500 text-white px-3 py-1 rounded"
                   onclick="return confirm('Delete this donor?')">
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