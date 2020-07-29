<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In Dashboard</title>
</head>
<body>
    <table border="1" width="1000px">
        <tr>
            <td>
                <img src="logo.png" alt="company logo" height="50px" width="150px">
            </td>
            <td>
            <p style="text-align:right">Logged in as <a href="">
                    <?php echo $_SESSION["name"];?>
                </a> | <a href="">Logout</a></p>
            </td>   
        </tr>
        <tr>
            <td width="30%">
                Account
                <hr>
                <ul>
                    <li><a href="">Dashboard</a></li>
                    <li><a href="profile.php">View Profile</a></li>
                    <li><a href="edit_profile.php">Edit Porfile</a></li>
                    <li><a href="">Change Profile Picture</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="login.html">Logout</a></li>
                </ul>
            </td>
            <td>
                <fieldset>
                    <legend>Profile</legend>
                    <table>
                        <tr>
                            <td>Name: <hr></td>
                            <td><?php echo $_SESSION["name"];?> <hr></td>
                            <td rowspan="4"> <img src="user.png" alt="user logo" height="150px" width="150px"> <br> <center><a href="" >Change</a></center></td>
                        </tr>
                        <tr>
                            <td>Email: <hr></td>
                            <td><?php echo $_SESSION["email"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Gender: <hr></td>
                            <td><?php echo $_SESSION["gender"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Date Of Birth: <hr></td>
                            <td><?php echo $_SESSION["dateOfBirth"];?> <hr></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td><a href="">Edit Profile</a></td>
                        </tr>

                    </table>

                </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2"><center>Copyright c 2017</center> </td>
        </tr>
    </table>
</body>
</html>