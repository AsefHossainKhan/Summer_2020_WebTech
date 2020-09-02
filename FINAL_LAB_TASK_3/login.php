<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>LOGIN</legend>
            <table>
                <tr>
                    <td>Id</td>
                </tr>
                <tr>
                    <td><input type="text" name="id" value="" id="id"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password" value="" id="password"></td>
                </tr>
                <tr>
                    <td><input type="checkBox" name="rememberMe" id="rememberMe">Remember Me</td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="button" value="Login" name="loginButton" onclick="checkInputs()">
                        <a href="">Register</a>
                    </td>
                </tr>
            </table>
            <h2></h2>
        </fieldset>
    </form>

    <script>
        function checkInputs() {
            var id = document.getElementById('id').value;
            var password = document.getElementById('password').value;
            var rememberMe = document.getElementById('rememberMe');

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'loginBackend.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            if (rememberMe.checked == true) {
              xhttp.send('&id='+id+'&password='+password+'&rememberMe'+rememberMe);
            }
            else {
              xhttp.send('&id='+id+'&password='+password);
            }

            
            //document.getElementById('msg').innerHTML = xhttp.responseText;
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    // document.getElementById('data').innerHTML =  this.responseText;
                    if (this.responseText == "admin") {
                      window.location.replace("adminHomePage.php");
                    }
                    else if (this.responseTest == "user") {
                      window.location.replace("userHomePage.php");
                    }
                    document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
                    //document.getElementById('loginButton').style.display = "inline";
                    // console.log(document.getElementById('loginButton'));
                }
            }
        }
    </script>

</body>
</html>

