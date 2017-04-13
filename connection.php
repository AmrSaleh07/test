<?php
$con=mysqli_connect("localhost","root","","manager");

if($con)
{
	echo '{"message":"connection to database successfull"}';
}

else
{
	'{"message":"Unable to connect to database"}';
}

?>