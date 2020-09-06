<?php
	require_once('../php/sessionController.php');
	require_once('../service/userService.php');
?>

<?php
    $users = getAllUser();
echo "
  <table border=1>
    <tr>
      <td>ID</td> 
      <td>NAME</td>
      <td>password</td> 
      <td>Email</td>
      <td>Action</td>
    </tr> ";
    for($i=0; $i != count($users); $i++ ){ 
      echo "
        <tr>
          <td>".$users[$i]['id']."</td>
          <td>".$users[$i]['username']."</td>
          <td>".$users[$i]['password']."</td>
          <td>".$users[$i]['email']."</td>
          <td>
            <a href=\"edit.php?id=".$users[$i]['id']."\"> Edit</a> |
            <a href=\"delete.php?id=".$users[$i]['id']."\"> Delete</a> 

          </td>
        </tr> ";
    } 
echo "</table>";
  
?>
