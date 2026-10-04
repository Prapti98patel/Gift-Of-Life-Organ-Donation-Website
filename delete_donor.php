<?php
include 'config.php';

$id = $_GET['id'];

if(isset($_POST['delete']))
{
    mysqli_query($conn,"DELETE FROM donors WHERE id=$id");
    header("location:donors.php");
}
?>

<html>

<head>

<title>Delete Donor</title>

<style>

body{
margin:0;
font-family:Arial;
background:#f4f7f6;
}

/* Sidebar */

.sidebar{
position:fixed;
width:220px;
height:100%;
background:#2e7d32;
padding-top:20px;
}

.sidebar h2{
color:white;
text-align:center;
margin-bottom:30px;
}

.sidebar a{
display:block;
color:white;
padding:12px 20px;
text-decoration:none;
}

.sidebar a:hover{
background:#1b5e20;
}

/* Content */

.content{
margin-left:240px;
padding:40px;
}

/* Delete Box */

.delete-box{
background:white;
width:400px;
padding:30px;
border-radius:8px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
text-align:center;
}

/* Buttons */

.delete-btn{
background:#c62828;
color:white;
padding:10px 20px;
border:none;
border-radius:4px;
cursor:pointer;
}

.cancel-btn{
background:#777;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:4px;
margin-left:10px;
}

.delete-btn:hover{
background:#8e0000;
}

</style>

</head>

<body>

<div class="sidebar">

<h2>Admin Panel</h2>

<a href="dashboard.php">Dashboard</a>
<a href="donors.php">Manage Donors</a>
<a href="Manage FAQ.php">Manage FAQ</a>
<a href="contact_messages.php">Contact Messages</a>
<a href="logout.php">Logout</a>

</div>


<div class="content">

<div class="delete-box">

<h2>Delete Donor</h2>

<p>Are you sure you want to delete this donor?</p>

<form method="POST">

<button class="delete-btn" name="delete">Yes, Delete</button>

<a class="cancel-btn" href="donors.php">Cancel</a>

</form>

</div>

</div>

</body>

</html>