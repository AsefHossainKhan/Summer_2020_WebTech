<?php 
  require_once('db.php');

  $employername = $_POST['employername'];
  $companyname = $_POST['companyname'];
  $contactno = $_POST['contactno'];
  $username = $_POST['username'];
  $password = $_POST['password'];
  $con = dbConnection();
  // $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  // $result = mysqli_query($con, $query);

  if (empty($employername) || empty($companyname) || empty($contactno) ||empty($username) || empty($password)) {
    echo "Fields cannot be empty";
  }
  else {
    $query = "INSERT INTO users VALUES ('','$employername','$companyname','$contactno','$username','$password','employer')";
    mysqli_query($con, $query);
    echo "Success";
  }

  
?>