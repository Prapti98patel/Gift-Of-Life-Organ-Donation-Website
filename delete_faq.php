<?php
include '../db_connect.php';

if(isset($_GET['id']))
{
    $id = $_GET['id'];

    // Delete query (use correct column name)
    mysqli_query($conn, "DELETE FROM faqs WHERE faq_id='$id'");

    // Redirect back
    header("Location: Manage FAQ.php");
    exit();
}
else
{
    echo "Invalid Request";
}
?>