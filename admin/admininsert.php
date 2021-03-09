<?php
session_start();

$con = mysqli_connect('localhost', 'root' );
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'adminlogin');

if(isset($_POST['submit'])){
	$user = $_POST['adminname'];
	$password = $_POST['adminpass'];

	$sql = " select * from  login where username='$user' and password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['adminname'] = $user;
			header('location:adminpage.php');
		}else{
			echo "login failed";
			header('location:index.php');
		}

}


?>