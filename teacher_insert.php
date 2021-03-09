<?php

include "dbcon.php";



 $a = $_POST['name'];
 $b = $_POST['email'];
 $c = $_POST['dob'];
 $d = $_POST['phone'];
 $e = $_POST['college'];
 $f = $_POST['gender'];



 $data ="insert into teacher(name,email,dob,phone,college,gender) value ('$a','$b','$c','$d','$e','$f')";
mysqli_query($con,$data);


?>