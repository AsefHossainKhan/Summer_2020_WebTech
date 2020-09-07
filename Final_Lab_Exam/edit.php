<?php
  require_once('db.php');


  $id =  $_GET['id'];

  $con = dbConnection();
  $query = "SELECT * FROM users WHERE id='$id'";
  $result = mysqli_query($con, $query);

  $row = mysqli_fetch_assoc($result);

  $employername = $row['employer_name'];
  $companyname = $row['company_name'];
  $contactno = $row['contact_no'];
  $username = $row['username'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  employer name<input type="text" value = "<?=$employername ?>" id="employername"> <br>
  company name<input type="text" value = "<?=$companyname ?>" id="companyname"> <br>
  contact no<input type="text" value = "<?=$contactno ?>" id="contactno"> <br>
  username<input type="text" value = "<?=$username ?>" id="username"> <br>
  <input type="hidden" value = "<?=$id ?>" id="id">
  <button onclick="edits()">Edit Values</button>
  <p></p>


  <script>
    function edits() {
      var employername = document.getElementById('employername').value;
      var companyname = document.getElementById('companyname').value;
      var contactno = document.getElementById('contactno').value;
      var username = document.getElementById('username').value;
      var id = document.getElementById('id').value;
      var xhttp = new XMLHttpRequest();
      xhttp.open('POST', 'updateUser.php', true);
      xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhttp.send('employername='+employername+'&companyname='+companyname+'&contactno='+contactno+'&username='+username+'&id='+id);
      xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementsByTagName('p')[0].innerHTML = this.responseText;
        }
      }
    }
  </script>
</body>
</html>