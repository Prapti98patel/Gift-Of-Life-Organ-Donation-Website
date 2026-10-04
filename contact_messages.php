<?php
include '../db_connect.php';

/* Fetch messages safely */
$query = "SELECT * FROM contact_messages ORDER BY id DESC";
$result = mysqli_query($conn, $query);

if(!$result){
    die("Error: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Messages</title>

<style>

body{
margin:0;
font-family: Arial;
background:#f4f7f6;
}

/* Sidebar */
.sidebar{
position:fixed;
left:0;
top:0;
width:220px;
height:100%;
background:#2e8b57;
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

/* Main */
.main{
margin-left:240px;
padding:30px;
}

h2{
color:#2e7d32;
}

/* Table */
table{
width:100%;
border-collapse:collapse;
background:white;
margin-top:20px;
}

th, td{
padding:10px;
border:1px solid #ddd;
}

th{
background:#2e8b57;
color:white;
}

tr:hover{
background:#f1f8f4;
}

/* Delete Button */
.delete-btn{
background:red;
color:white;
padding:5px 10px;
text-decoration:none;
border-radius:4px;
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

<div class="main">

<h2>Contact Messages</h2>

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Subject</th>
<th>Message</th>
<th>Date</th>
<th>Action</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['message']; ?></td>
<td><?php echo $row['created_at']; ?></td>

<td>
<a class="delete-btn"
href="delete_message.php?id=<?php echo $row['id']; ?>"
onclick="return confirm('Delete this message?')">
Delete
</a>
</td>
</tr>

<?php } ?>

</table>

</div>

</body>
</html>
