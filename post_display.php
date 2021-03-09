<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<th>id</th>
			<th>username</th>
			<th>password</th>
			<th>action</th>
		</tr>
		<?php
		include "dbcon.php";

		$data = "select * from user1";
		$query = mysqli_query($con,$data);
       

		  //print_r($result);

        while ($result = mysqli_fetch_array($query)) 
        {
        	//echo "<pre>";
        	//print_r($result);

        
		?>
		<tr>
			<td><?php echo $result['id'] ?></td>
			<td><?php echo $result['username'] ?></td>
			<td><?php echo $result['password'] ?></td>
			<td>edit,delete,show</td>
		</tr>
		<?php 
	    }
	    ?>
	</table>

</body>
</html>