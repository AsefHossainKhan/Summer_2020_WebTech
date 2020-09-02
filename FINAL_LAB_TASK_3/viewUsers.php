<?php
  session_start();

  if(!isset($_SESSION["rememberMeChecked"])) {
      $_SESSION["currentLink"] = "userHomePage.php";
      $_SESSION["rememberMeChecked"] = true;
      header("Location: rememberMe.php");

  }
  echo "<table border='1'>
  <tr>
      <td colspan = '4' align='center'>Users</td>
  </tr>
  <tr>
      <td>ID</td>
      <td>NAME</td>
      <td>EMAIL</td>
      <td>USER TYPE</td>
  </tr>
  <?php

      //DATABASE CONNECTION
      $connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini_project');
      $tableName = "userinfo";
      $query = "SELECT * FROM $tableName";
      $result = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($result)) {
          echo "
          <tr>
              <td>".$row['id']."</td>
              <td>".$row["name"]."</td>
              <td>".$row["email"]."</td>
              <td>".$row["usertype"]."</td>
          </tr>";
      }

      $homeLink = "adminHomePage.php";
  ?>
  <tr>
      <td colspan = "4" align="right"><a href=<?php echo $homeLink; ?>>Go Home</a></td>
  </tr>

  </table>";
?>


    
