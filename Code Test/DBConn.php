<!-- Name:James Mcdonald
	 Student Number :18011160
	 Lecturer Name :Rothman
	 admin@rothman.za.bz
	 
	 Declaration:i hereby declare that this is my own work and 
	 any code obtained by other sources will be refrenced.
-->
<?php
$location="localhost";
$user="root";
$dbpassword = "";
$database = "scout_test";

$DBConnect = NULL;
	$ErrorMage = array();
	$DBConnect = @new mysqli($location,$user,$password,$database);
	if ($DBConnect->connect_error)
	{
		$ErrorMage[] = "The database server is not available";
		echo "error in connection";
	}
	else
	{
	
	}
	
?>