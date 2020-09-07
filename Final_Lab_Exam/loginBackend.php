<?php 
  require_once('db.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $con = dbConnection();
  $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  $result = mysqli_query($con, $query);

  if (empty($username) || empty($password)) {
    echo "Fields cannot be empty";
  }
  else if(mysqli_fetch_assoc($result)) {
      echo "Success";
  }
  else {
    echo "Incorrect Data";
  }
  
?>