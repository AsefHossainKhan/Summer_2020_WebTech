<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>REGISTRATION</legend>
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
                    <td>Confirm Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="confirmPassword" value="" id="confirmPassword"></td>
                </tr>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name" value="" id="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email" value="" id="email"></td>
                </tr>
                <tr>
                    <td>User Type [User/Admin]</td>
                </tr>
                <tr>
                    <td>
                        <Select name="userType" id="userType">
                            <Option value="User">User</Option>
                            <Option value="Admin">Admin</Option>
                        </Select>
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="button" value="Register" name="registerButton" onclick="checkInputs()">
                        <a href="login.php">Login</a>
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
            var confirmPassword = document.getElementById('confirmPassword').value;
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var userType = document.getElementById('userType').value;
            

            var xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'registrationBackend.php', true);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send('&id='+id+'&password='+password+'&confirmPassword='+confirmPassword+'&name='+name+'&email='+email+'&userType='+userType);
            
            //document.getElementById('msg').innerHTML = xhttp.responseText;
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    // document.getElementById('data').innerHTML =  this.responseText;
                    document.getElementsByTagName('h2')[0].innerHTML = this.responseText;
                    //document.getElementById('loginButton').style.display = "inline";
                    // console.log(document.getElementById('loginButton'));
                }
            }
        }
    </script>
</body>
</html>