<?php
include "dbcon.php";

$a = $_POST['name'];
$b = $_POST['city'];

 $data ="insert into delhi(name,city) value ('$a','$b')";
        mysqli_query($con,$data);


?>