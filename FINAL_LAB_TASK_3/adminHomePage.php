<?php
    session_start();

    if(!isset($_SESSION["rememberMeChecked"])) {
        $_SESSION["currentLink"] = "adminHomePage.php";
        $_SESSION["rememberMeChecked"] = true;
        header("Location: rememberMe.php");

    }
    if(!isset($_SESSION["name"])) {
        header("Location: login.php");
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Home Page</title>
</head>
<body>
    <center>
        <h1>WELCOME  
            <?php 
                echo $_SESSION["name"];
            ?>
        !</h1>
        <a href="javascript:profile()">Profile</a><br>
        <a href="changePassword.php">Change Passowrd</a><br>
        <a href="javascript:viewUsers()">View Users</a><br>
        <a href="logout.php">Logout</a><br>
        <p></p>
    </center>

    <script>
      function profile() {
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', 'profile.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send();
        
        //document.getElementById('msg').innerHTML = xhttp.responseText;
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                // document.getElementById('data').innerHTML =  this.responseText;
                document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                //document.getElementById('loginButton').style.display = "inline";
                // console.log(document.getElementById('loginButton'));
            }
        }
      }
      function viewUsers() {
        var xhttp = new XMLHttpRequest();
        xhttp.open('POST', 'viewUsers.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send();
        
        //document.getElementById('msg').innerHTML = xhttp.responseText;
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                // document.getElementById('data').innerHTML =  this.responseText;
                document.getElementsByTagName('p')[0].innerHTML = this.responseText;
                //document.getElementById('loginButton').style.display = "inline";
                // console.log(document.getElementById('loginButton'));
            }
        }
      }
    </script>
    
</body>
</html>
