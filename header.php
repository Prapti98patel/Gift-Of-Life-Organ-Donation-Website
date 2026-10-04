<?php session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
}
?>

<link href="https://cdn.tailwindcss.com" rel="stylesheet">