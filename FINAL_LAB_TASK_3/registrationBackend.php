<?php
  //DATABASE CONNECTION
  $connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini_project');

  $id = $_POST["id"];
  $password = $_POST["password"];
  $confirmPassword = $_POST["confirmPassword"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $userType = $_POST["userType"];
  if(empty($id) || empty($password) || empty($confirmPassword) || empty($name) || empty($email)){
      echo "empty fields found";
  }
  else if($_POST["password"] != $_POST["confirmPassword"]) {
      echo "passwords dont match";
  }
  else {
      
      $tableName = "userinfo";
      $query = "INSERT INTO $tableName (id,password,name,email,usertype) VALUES ('$id','$password','$name','$email','$userType')";
      mysqli_query($connection,$query);
      mysqli_close($connection);
      echo "success";
      // header("Location: login.php");
  }

?>