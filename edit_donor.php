<?php
include 'config.php';

$id = $_GET['id'];

$result = mysqli_query($conn,"SELECT * FROM donors WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
$name = $_POST['name'];
$email = $_POST['email'];

mysqli_query($conn,"UPDATE donors SET name='$name',email='$email' WHERE id=$id");

header("location:donors.php");
}
?>

<html>

<head>

<title>Edit Donor</title>

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
background:#256f47;
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
background:#256f47;
}

/* Content */

.content{
margin-left:240px;
padding:40px;
}

/* Form Card */

.form-box{
background:white;
padding:30px;
width:400px;
border-radius:8px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

/* Inputs */

input{
width:100%;
padding:10px;
margin-top:8px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:4px;
}

/* Button */

button{
background:#2e7d32;
color:white;
padding:10px;
border:none;
border-radius:4px;
cursor:pointer;
width:100%;
}

button:hover{
background:#1b5e20;
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

<h2>Edit Donor</h2>

<div class="form-box">

<form method="POST">

<label>Name</label>
<input type="text" name="name" value="<?php echo $row['name']; ?>">

<label>Email</label>
<input type="text" name="email" value="<?php echo $row['email']; ?>">

<button name="update">Update Donor</button>

</form>

</div>

</div>

</body>
</html>