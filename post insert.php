<?php

include "dbcon.php";

$a = $_POST['username'];
$b = $_POST['password'];



 $data ="insert into user1(username,password) value ('$a','$b')";
mysqli_query($con,$data);


?>