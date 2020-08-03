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
                    <td><input type="text" name="id"></td>
                </tr>
                <tr>
                    <td>Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Confirm Password</td>
                </tr>
                <tr>
                    <td><input type="password" name="confirm password"></td>
                </tr>
                <tr>
                    <td>Name</td>
                </tr>
                <tr>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Email</td>
                </tr>
                <tr>
                    <td><input type="text" name="email"></td>
                </tr>
                <tr>
                    <td>User Type [User/Admin]</td>
                </tr>
                <tr>
                    <td>
                        <Select>
                            <Option>User</Option>
                            <Option>Admin</Option>
                        </Select>
                    </td>
                </tr>
                <tr>
                    <td><hr></td>
                </tr>
                <tr>
                    <td><input type="button" value="Register">
                        <a href="">Login</a>
                    </td>
                </tr>


            </table>
        </fieldset>
    </form>
</body>
</html>

<?php
    
?>