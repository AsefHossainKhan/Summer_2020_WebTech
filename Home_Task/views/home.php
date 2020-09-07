<?php
	require_once('../php/sessionController.php');	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>
<body>
	<h1>Welcome home <?=$_SESSION['username']?></h1>

	<input type="hidden" id="username" value="<?=$_SESSION['username']?>">
	<a href="javascript:create()"> Create New User</a> |
	<a href="javascript:userList()" > User List</a> |
	<a href="../php/logoutController.php"> logout</a>
	<p id="ptag"></p>

</body>
</html>
	

<script>
	function userList() {
		// var username = document.getElementById('username').value;
		
		var xhttp = new XMLHttpRequest();
		xhttp.open('POST', 'userList.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send();
		
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
					document.getElementById('ptag').innerHTML = this.responseText;
			}
		}
	}
	function create() {
		// var username = document.getElementById('username').value;
		var xhttp = new XMLHttpRequest();
		xhttp.open('POST', 'createuser.php', true);
		xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
		xhttp.send();
		
		xhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
					document.getElementById('ptag').innerHTML = this.responseText;
			}
		}
	}
</script>