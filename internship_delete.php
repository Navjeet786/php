<?php 
include "dbcon.php";

echo$id= $_GET['id'];

$data = "DELETE from internship where id=$id";
mysqli_query($con,$data);
header('location:internship_display.php');

?>