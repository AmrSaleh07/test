

<?php

require "connection.php";


	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	
	if (!empty($password) && !empty($email) && !empty($name)){
		
		$encrypted_password = md5($password);
	
	$sqlinsert="INSERT INTO `users`(`name`, `email`, `password`) VALUES('".$name."','".$email."','".$encrypted_password."')";
	$result=mysqli_query($con,$sqlinsert);
	
	if ($result)
	{
		echo '{"message":"Data save to database successfull"}';
	}
	
	else
	{
		echo '{"message":"Unable to save data to database"}';
	}
	}
	
	
	




?>