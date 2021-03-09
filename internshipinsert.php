<?php

include "dbcon.php";


$a = $_POST['name'];
$b = $_POST['email'];
$c = $_POST['phone'];
$d = $_POST['address'];
$e = $_POST['gender'];
$f = $_POST['college'];
$g = $_POST['qualification'];
$h = $_POST['branch'];
$i = $_POST['sem'];
$j = $_POST['course'];

 $data ="insert into internship(name,email,phone,address,gender,college,qualification,branch,sem,course) value ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
mysqli_query($con,$data)

?>