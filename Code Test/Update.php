<?php
if(isset($_POST['update'])){
	require_once "DBConn.php";
	//getting input data
	$ID = $_POST['ID'];
	$Username = $_POST['TXTUsername'];
	$Email = $_POST['TXTEmail'];
	$Password = $_POST['TXTPassword'];
	$Mobile = $_POST['TXTContactNum'];
	$Name = $_POST['TXTName'];
	$Surname = $_POST['TXTSurname'];
	$Job_Title = $_POST['TXTJobTitle'];
	$Bio = $_POST['TXTBio'];
	//sql query to update data in table
	$sl = "UPDATE users_dev SET username='".$Username."',email='".$Email."',password='".$Password."',mobile='".$Mobile."',name='".$Name."',surname='".$Surname."',job_title='".$Job_Title."',bio='".$Bio."' WHERE id='".$ID."'";
	if(mysqli_query($DBConnect,$sl))
	{
		echo "<script type='text/javascript'>alert('User has been added successfully!');window.location='edit.php'</script>";

	}
	else
	{
		echo "<script type='text/javascript'>alert('User Failed something went wrong please try again');window.location='edit.php'</script>";
		echo "Error: " . $sl . "<br>" . mysqli_error($DBConnect);
	}
	session_destroy();
}
?>