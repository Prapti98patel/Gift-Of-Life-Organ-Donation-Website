<?php
include '../db_connect.php';

/* Insert FAQ */
if(isset($_POST['add'])){
    $question = $_POST['question'];
    $answer = $_POST['answer'];

    mysqli_query($conn,"INSERT INTO faqs (question, answer) VALUES ('$question','$answer')");
}

/* Fetch FAQs */
$result = mysqli_query($conn,"SELECT * FROM faqs ORDER BY faq_id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage FAQ</title>

<style>

body{
margin:0;
font-family:Arial;
background:#f4f7f6;
}

.sidebar{
position:fixed;
width:220px;
height:100%;
background:#2e8b57;
padding-top:20px;
}

.sidebar h2{
color:white;
text-align:center;
}

.sidebar a{
display:block;
color:white;
padding:12px;
text-decoration:none;
}

.sidebar a:hover{
background:#256f47;
}

.main{
margin-left:240px;
padding:30px;
}

.form-box{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
margin-bottom:30px;
}

input, textarea{
width:100%;
padding:10px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
background:#2e8b57;
color:white;
padding:10px;
border:none;
border-radius:5px;
}

.table-box{
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 2px 6px rgba(0,0,0,0.1);
}

table{
width:100%;
border-collapse:collapse;
}

th{
background:#2e8b57;
color:white;
padding:10px;
}

td{
padding:10px;
border-bottom:1px solid #ddd;
}

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

<h2>Manage FAQ</h2>

<div class="form-box">
<form method="post">
<input type="text" name="question" placeholder="Enter Question" required>
<textarea name="answer" placeholder="Enter Answer" required></textarea>
<button name="add">Add FAQ</button>
</form>
</div>

<div class="table-box">

<table>

<tr>
<th>ID</th>
<th>Question</th>
<th>Answer</th>
<th>Action</th>
</tr>

<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
?>

<tr>

<td><?php echo $row['faq_id']; ?></td>

<td><?php echo $row['question']; ?></td>

<td><?php echo $row['answer']; ?></td>

<td>
<a class="delete-btn" 
href="delete_faq.php?id=<?php echo $row['faq_id']; ?>" 
onclick="return confirm('Delete this FAQ?')">
Delete
</a>
</td>

</tr>

<?php
    }
}else{
    echo "<tr><td colspan='4' align='center'>No FAQ Found</td></tr>";
}
?>

</table>

</div>

</div>

</body>
</html>