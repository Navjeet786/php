<?php

include "dbcon.php";
$id = $_GET['id'];
$a = "select * from delhi where id = $id";
$b = mysqli_query($con,$a);
$result = mysqli_fetch_array($b);


?>

<h1>
	Name: <?php echo$result['name'] ?>

</h1>
<br>
<h1>
	city: <?php echo$result['city'] ?>
</h1>