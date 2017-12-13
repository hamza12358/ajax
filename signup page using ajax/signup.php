<?php
 include_once('db_connection.php');
 
 
	$username = $_POST['username'];
	$password = (md5($_POST['password']));
	$fname = (md5($_POST['fname']));
	$lname = (md5($_POST['lname']));
	
	
		$query = "INSERT INTO `users` VALUES ('', '$username', '$password', '$fname', '$lname')";
	if($query_run = mysqli_query($db,$query)){
		 echo "<div class='alert alert-success'>
    <strong>Success!</strong>Data is inserted.
  </div>";
		}else{
			echo '<div class="alert alert-warning">
    <strong>Warning!</strong> This data is not inserted.
  </div>';
		}
	
	

 

?>