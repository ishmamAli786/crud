<?php
include("connection.php");
$id=$_GET['id'];
$q="delete from info where id=$id";
mysqli_query($con,$q);
header('location:display.php');
?>