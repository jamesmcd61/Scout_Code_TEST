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
<div class="container">
  <h2>SCOUT TECHNOLOGIES</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New User</button>
				 <!-- Table Create  -->
				<table style="width:100%">
					<tr>
						<th>Fullname</th>
						<th>Email</th>
						<th>Phone Number</th>
					</tr>
					<?php
						//connection file included 
						include_once("DBConn.php");
						//selection and loop through talbe data to pupulate and create records of database in table
						$select = $DBConnect->query("select * from users_dev ");
						if($select != null){
							while($row = $select->fetch_assoc()){
							$_SESSION['id']= $row['id'];
					?>
						<tr>
							<td><?php echo $row["name"]; echo" ";  echo $row["surname"];?></td>
							<td><?php echo $row["email"];?></td>
							<td><?php echo $row["mobile"];?></td>
							<td>
								<a href="edit.php">
									<button type="button" class="btn btn-info btn-lg">Edit</button>
								</a>
							</td>
						</tr>
					<?php
							}
						}
					?>	
				</table>
  <!-- Modal -->
	<div class="modal fade" id="myModal" role="dialog">
	  <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
	  <!-- Modal Header-->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Create User Profile</h4>
        </div>
		<form method ="POST" action="Insert.php" enctype="multipart/form-data" >
		<!-- Modal body-->
        <div class="modal-body">
			<input type="text" name="TXTUsername" id="TXTUsername" value="" class="form-control"placeholder="Username" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<input type="text" name="TXTEmail" id="TXTEmail" value="" class="form-control"placeholder="Email" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" maxlength="255" title="Invalid Email" required>
				<br>
			<input type="password" name="TXTPassword" id="TXTPassword" value="" class="form-control"placeholder="Password" pattern="^[a-zA-Z0-9'.,-]{0,150}$" maxlength="25" title="Invalid Password" required>
				<br>
			<input type="tel" name="TXTContactNum" id="TXTContactNum" value="" class="form-control" placeholder="Contact Number" pattern="[0-9]{10}" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="10" title="Invalid contact number" required>
				<br>
			<input type="text" name="TXTName" id="TXTName" value="" class="form-control"placeholder="Name" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<input type="text" name="TXTSurname" id="TXTSurname" value="" class="form-control"placeholder="Surname" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<input type="text" name="TXTJobTitle" id="TXTJobTitle" value="" class="form-control"placeholder="Job Title" pattern="[A-Za-z\s]+" maxlength="25" title="Please only use letters" required>
				<br>
			<textarea class="form-control form-textarea" type="text" placeholder="Bio"  name="TXTBio" id="TXTBio" pattern="^[a-zA-Z0-9,.!? ]*$" maxlength="254" required></textarea>
        </div>
		<!-- Modal Footer-->
        <div class="modal-footer">
          <button type="submit" name="submit" id="submit" class="btn btn-default">Create</button>
        </div>
		</form>
      </div>
    </div>
  </div> 
</div>
</body>
</html>
