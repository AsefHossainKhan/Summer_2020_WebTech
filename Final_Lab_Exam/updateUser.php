<?php 
  require_once('db.php');
  $con = dbConnection();
  $employername = $_POST['employername'];
  $companyname = $_POST['companyname'];
  $contactno = $_POST['contactno'];
  $username = $_POST['username'];
  $id = $_POST['id'];
  $query = "UPDATE users SET employer_name = '$employername', company_name = '$companyname', contact_no = '$contactno', username = '$username' WHERE id='$id'";
  mysqli_query($con, $query);

  echo "success";
  
?>