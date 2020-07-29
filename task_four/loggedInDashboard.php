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
    <table border="1px" width="1000px">
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
                    <li><a href="">Edit Porfile</a></li>
                    <li><a href="">Change Profile Picture</a></li>
                    <li><a href="">Change Password</a></li>
                    <li><a href="">Logout</a></li>
                </ul>
            </td>
            <td>Welcome <?php echo $_SESSION["name"];?> </td>
        </tr>
        <tr>
            <td colspan="2"><center>Copyright c 2017</center> </td>
        </tr>
    </table>
</body>
</html>