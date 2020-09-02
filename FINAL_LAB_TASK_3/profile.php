<?php
    session_start();

    if(!isset($_SESSION["rememberMeChecked"])) {
        $_SESSION["currentLink"] = "userHomePage.php";
        $_SESSION["rememberMeChecked"] = true;
        header("Location: rememberMe.php");

    }
?>


<?php
  $id = $_SESSION["id"];
  $name = $_SESSION["name"];
  $email = $_SESSION["email"];
  $userType = $_SESSION["usertype"];

  // if($userType == "Admin") {
  //     $homeLink = "adminHomePage.php";
  // }
  // else {
  //     $homeLink = "userHomePage.php";
  // }
  echo "<table border=1>
  <tr>
      <td colspan=2 align=center>Profile</td>
  </tr>
  <tr>
      <td>ID</td>
      <td>$id</td>
  </tr>
  <tr>
      <td>NAME</td>
      <td>$name</td>
  </tr>
  <tr>
      <td>EMAIL</td>
      <td>$email</td>
  </tr>
  <tr>
      <td>USER TYPE</td>
      <td>$userType</td>
  </tr>

</table>";
?>

