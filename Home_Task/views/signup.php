<?php
	
	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Signup page</title>
</head>
<body>
	<form action="../php/signupController.php" method="post">
		<fieldset>
			<legend>SignUp</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" id="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" id="password"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" id="email"></td>
				</tr>
				<tr>
					<td></td>
					<td>
					<input type="button" name="submit" value="Submit" onclick="checkInputs()">
					<input type="button" name="loginButton" value="Login" onclick="redirect()" style="display: none" id='loginButton'>
					</td>
				</tr>
			</table>
			<h2></h2>
		</fieldset>
	</form>
	<script>
		function checkInputs() {
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			var email = document.getElementById('email').value;
			
			var xhttp = new XMLHttpRequest();
			xhttp.open('POST', 'signupBackend.php', true);
			xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
			xhttp.send('username='+username+'&password='+password+'&email='+email);
			
			//document.getElementById('msg').innerHTML = xhttp.responseText;
			xhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					// document.getElementById('data').innerHTML =  this.responseText;
					if (this.responseText == "Fields cannot be empty") {
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
					}
					else if (this.responseText == "Username is not unique"){
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
					}
					else if (this.responseText == "Success") {
						document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
						document.getElementById('loginButton').style.display = "inline";
					}


					// document.getElementsByTagName('h2')[0].innerHTML = this.responseText;

					// console.log(document.getElementById('loginButton'));
				}
			}
		}

		function redirect() {
			//WHY DOESNT IT WORK!!
			// window.open.href = "home.php";
			window.location.replace("home.php");
		}
	</script>
</body>
</html>

