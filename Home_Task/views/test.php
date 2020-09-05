<?php 
  require_once('../db/db.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  
  $con = dbConnection();
	$sql = "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";

  // if(mysqli_query($con, $sql)){
  //   return true;
  // }else{
  //   return false;
  // }

  mysqli_query($con, $sql);


?>