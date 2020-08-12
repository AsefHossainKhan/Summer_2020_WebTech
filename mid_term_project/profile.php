<?php
    session_start();

    //CHECK IF THE USER IS ALREADY LOGGED IN OR NOT
    if(isset($_SESSION["loginStatus"])) {
        //everything is good if it goes here
    }
    else if(isset($_COOKIE["rememberMeEmail"])) {
        $_SESSION["currentLink"] = "home.php";
        header("Location: rememberMe.php");
    }
    else {
        header("Location: login.php");
    }
?>

<?php

    $name = $_SESSION["name"];
    $email = $_SESSION["email"];
    $gender = $_SESSION["gender"];
    $mobileNumber = $_SESSION["mobileNumber"];
    $primaryRole = $_SESSION["primaryRole"];
    $mmr = $_SESSION["mmr"];
    $steamLink = $_SESSION["steamLink"];
    $dotabuffLink = $_SESSION["dotabuffLink"];
    $achievements = $_SESSION["achievements"];
    $fees = $_SESSION["fees"];
    $schedule = $_SESSION["schedule"];



    // $name = $_SESSION["name"];
    // $email = $_SESSION["email"];
    $imageSource = "profilepictures/".$email.".jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <!-- <form action="" method="post">    
        <fieldset>
            <legend>Profile</legend>
            <img src=<?php echo $imageSource; ?> alt="noProfilePicture" height=100px width=100px>
            <hr>
            <button type="submit" name="submitButton">Submit</button>
        </fieldset>
    </form> -->
    <fieldset>
        <legend>PROFILE</legend>
        <table width=100%>
            <tr>
                <td>Profile Picture</td>
                <td>:</td>
                <td><img src=<?php echo $imageSource; ?> alt="noProfilePicture" height=100px width=100px>
                </td>
            </tr>
            <tr>
                <td>Name</td>
                <td>:</td>
                <td><?php echo $name; ?>
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><?php echo $email; ?>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td><?php echo $gender; ?>
                </td>
            </tr>
            <tr>
                <td>Mobile Number</td>
                <td>:</td>
                <td><?php echo $mobileNumber; ?>
                </td>
            </tr>
            <tr>
                <td>Primary Role</td>
                <td>:</td>
                <td><?php echo $primaryRole; ?>
                </td>
            </tr>
            <tr>
                <td>MMR</td>
                <td>:</td>
                <td><?php echo $mmr; ?>
                </td>
            </tr>
            <tr>
                <td>Steam Link</td>
                <td>:</td>
                <td><?php echo $steamLink; ?>
                </td>
            </tr>
            <tr>
                <td>Dotabuff Link</td>
                <td>:</td>
                <td><?php echo $dotabuffLink; ?>
                </td>
            </tr>
            <tr>
                <td>Achievements</td>
                <td>:</td>
                <td><?php echo $achievements; ?>
                </td>
            </tr>
            <tr>
                <td>Fees per hour</td>
                <td>:</td>
                <td><?php echo $fees; ?>
                </td>
            </tr>
            <tr>
                <td>Schedule</td>
                <td>:</td>
                <td><?php echo $schedule; ?>
                </td>
            </tr>
            <tr>
                <td colspan=3><hr></td>
            </tr>
            <tr>
                <td><a href="editProfile.php">Edit Profile</a></td>
                <td><a href="home.php">Home</a></td>
                <td><a href="changeProfilePicture.php">Add/Change Profile Picture</a></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>
