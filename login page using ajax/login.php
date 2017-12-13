<?php
 include_once('db_connection.php');
 
 
if (isset($_POST['username'])&&isset($_POST['password'])){
	$username = $_POST['username'];
	$password = (md5($_POST['password']));
	
	if(!empty($username)&&!empty($password)){
		$query = "SELECT * FROM `users` WHERE `username`='$username' AND `pass`='$password'";
	if($query_run = mysqli_query($db,$query)){
       $query_num_rows = mysqli_num_rows($query_run);
	   if($query_num_rows==0){
		   echo'<div class="alert alert-warning">
    <strong>Warning!</strong> the username is invalid.
  </div>';
	   }else{
		   echo "success";
	   }
	}
	}
}
 

?>