<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>SCOUT CODE TEST</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--form for getting data-->
<form method ="POST" action="Update.php" >


<center><h2>SCOUT TECHNOLOGIES</h2></center>
  <!-- Trigger the modal with a button -->
  <?php
		include_once("DBConn.php");
		$select = $DBConnect->query("select * from users_dev where id=".$_SESSION['id']."");
		if($select != null){
            while($row = $select->fetch_assoc()){
				
		
  ?>


<!--Page-->
  <center><h4 class="modal-title">Update User Profile</h4></center>
			<input type="text" name="TXTUsername" id="TXTUsername" value="<?php echo trim($row["username"]);?>" class="form-control"placeholder="Username" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<input type="text" name="TXTEmail" id="TXTEmail" value="<?php echo trim($row["email"]);?> " class="form-control"placeholder="Email"  maxlength="255" required>
				<br>
			<input type="password" name="TXTPassword" id="TXTPassword" value="<?php echo trim($row["password"]);?> " class="form-control"placeholder="Password" maxlength="25"  required>
				<br>
			<input type="tel" name="TXTContactNum" id="TXTContactNum" value="<?php echo trim($row["mobile"]);?> " class="form-control" placeholder="Contact Number"  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" title="Invalid contact number" required>
				<br>
			<input type="text" name="TXTName" id="TXTName" value="<?php echo trim($row["name"]);?> " class="form-control"placeholder="Name" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required> 
				<br>
			<input type="text" name="TXTSurname" id="TXTSurname" value="<?php echo trim($row["surname"]);?> " class="form-control"placeholder="Surname" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<input type="text" name="TXTJobTitle" id="TXTJobTitle" value="<?php echo trim($row["job_title"]);?> " class="form-control"placeholder="Job Title" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<textarea class="form-control form-textarea" type="text" placeholder="Bio" id="dogNotes" name="TXTBio" id="TXTBio" pattern="^[a-zA-Z0-9,.!? ]*$" maxlength="254" required><?php echo trim($row["bio"]);?></textarea>
				<br>
			<input type="hidden" name="ID" id="ID" value=<?php echo trim($row['id']);?>>
			<button type="submit" name="update" id="update" class="btn btn-default">Update</button>
			<a href="index.php">
			<button type="button" name="back" id="back" class="btn btn-default">Back</button>
			</a>
		</form>
	</body>
	<?php
		}
	}

	?>
</html>
<style>
input{
	width: 250px;
    padding: 20px;
}

</style>