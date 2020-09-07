<?php 
  require_once('db.php');
  $con = dbConnection();
  $id = $_POST['id'];
  $query = "DELETE FROM users WHERE id=$id";
  mysqli_query($con, $query);

  echo "success";
  
?>