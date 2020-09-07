<?php
  $id =  $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Are you sure you want to delete the user?
  <button onclick="deleteUser()">YES</button>
  <button onclick="goBack()">NO</button>
  <input type="hidden" id="hidden" value="<?=$id ?>">
  <script>
    function deleteUser() {
			var id = document.getElementById('hidden').value;

      var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'deleteUser.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('id='+id);
			xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if (this.responseText == "success") {
              window.location.replace("checkEmployer.html");
            }
        }
      }
    }

    function goBack() {
      window.location.replace("checkEmployer.html");
    }
  </script>
</body>
</html>