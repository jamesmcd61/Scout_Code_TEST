<?php
if(isset($_POST['submit'])){
	require_once "DBConn.php";
	//getting input data
	$Username = trim($_POST['TXTUsername']);
	$Email = trim($_POST['TXTEmail']);
	$Password = trim($_POST['TXTPassword']);
	$Mobile = trim($_POST['TXTContactNum']);
	$Name = trim($_POST['TXTName']);
	$Surname = trim($_POST['TXTSurname']);
	$Job_Title = trim($_POST['TXTJobTitle']);
	$Bio = trim($_POST['TXTBio']);
	//sql query to put data in table
	$sl="insert into users_dev(username, email, password, mobile, name, surname, job_title, bio) values ('$Username','$Email','$Password','$Mobile','$Name','$Surname','$Job_Title','$Bio')";
	//checking if it worked and if not giving error.
	if(mysqli_query($DBConnect,$sl))
	{
		echo "<script type='text/javascript'>alert('User has been added successfully!');window.location='index.php'</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('User Failed something went wrong please try again');window.location='index.php'</script>";
		//echo "Error: " . $sl . "<br>" . mysqli_error($DBConnect);
	}
}
?>