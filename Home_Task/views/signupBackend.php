<?php 
  require_once('../db/db.php');

  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $con = dbConnection();
  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query);

  if (empty($username) || empty($password) || empty($email)) {
    echo "Fields cannot be empty";
  }
  else if(mysqli_fetch_assoc($result)) {
      echo "Username is not unique";
  }
  else {
    $sql = "insert into users values('', '{$username}', '{$password}', '{$email}', 'user')";
    mysqli_query($con, $sql);
    echo "Success";
  }
  // echo "test";



  // echo $result;
  
  


?>