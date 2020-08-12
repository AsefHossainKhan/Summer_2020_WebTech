<?php
    ob_start();

    session_start();
    //DATABASE CONNECTION
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'coaching');


    //start work from here
    //if(isset($_COOKIE[""]))
    $email = "";
    $emailBool = false;
    $password = "";
    $emailBool = false;

    $buttonClicked = false;

    if(isset($_POST["submitButton"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        $buttonClicked = true;

        validateUser($email,$password);
    }

    function checkEmail($email) {
        global $emailBool;
        if($email == ""){
            echo "Email cannot be empty";
        }
        else if (!strpos($email,"@") || !strpos($email,".com")) {
            echo "Enter a valid email";
        }
        else {
            $emailBool = true;
        }
    }

    function checkPassword($password = "") {
        if($password == "") {
            echo "Password cannot be empty";
        }
    }

    function validateUser($email,$password) {
        global $connection;
        $query = "SELECT * FROM coaches WHERE email='$email' AND password='$password'";
        $result = mysqli_query($connection, $query);

        if($row=mysqli_fetch_assoc($result)) {


            $_SESSION["name"] = $row["name"];
            $_SESSION["password"] = $row["password"];
            $_SESSION["email"] = $email;
            $_SESSION["gender"] = $row["gender"];
            $_SESSION["mobileNumber"] = $row["mobilenumber"];
            $_SESSION["primaryRole"] = $row["primaryrole"];
            $_SESSION["mmr"] = $row["mmr"];
            $_SESSION["steamLink"] = $row["steamlink"];
            $_SESSION["dotabuffLink"] = $row["dotabufflink"];
            $_SESSION["achievements"] = $row["achievements"];
            $_SESSION["fees"] = $row["fees"];
            $_SESSION["schedule"] = $row["schedule"];

            $_SESSION["loginStatus"] = true;
            if(isset($_POST["rememberMe"])) {
                setcookie("rememberMeEmail", $email, time()+3600);
            }
            header("Location: home.php");
        }
        else {
            echo "username/password incorrect";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
</head>
<body>
    <fieldset>
        <legend>Login Page</legend>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="">
                    <?php if($buttonClicked)checkEmail($email); ?>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" value="">
                    <?php if($buttonClicked)checkPassword($password); ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="checkbox" name="rememberMe" value="rememberMe">Remember Me</td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submitButton" value="Submit"></td>
                </tr>
                <tr>
                    <td>Not a User?</td>
                    <td><a href="registration.php">Register</a></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>