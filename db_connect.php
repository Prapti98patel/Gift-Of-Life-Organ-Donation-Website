<?php

$conn = mysqli_connect("localhost","root","","organ_donation");

if(!$conn){
    die("Database Connection Failed: " . mysqli_connect_error());
}

?>