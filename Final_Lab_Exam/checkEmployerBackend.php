<?php 
  require_once('db.php');
  $value = $_POST['search'];
  $con = dbConnection();
  $query = "SELECT * FROM users WHERE user_type = 'employer' AND username LIKE '%$value%';";
  $result = mysqli_query($con, $query);

  echo "<table border=1>
  <tr>
    <td>Employer Name</td>
    <td>Company Name</td>
    <td>Contact No</td>
    <td>Username</td>
    <td></td>
    <td></td>
  </tr>";
  while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
      <td>".$row['employer_name']."</td>
      <td>".$row['company_name']."</td>
      <td>".$row['contact_no']."</td>
      <td>".$row['username']."</td>
      <td><input type=\"button\" value=\"edit\" onlclick=\"edit()\"></td>
      <td><input type=\"button\" value=\"delete\" onlclick=\"deletes()\"></td>
    </tr>";
  }
  echo "</table>";
  
?>