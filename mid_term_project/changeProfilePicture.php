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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">    
        <fieldset>
            <legend>Profile Picture</legend>
            Picture <input type="file" name="myfile">
            <hr>
            <button type="submit" name="submitButton">Submit</button>
            <br>
            <hr>
            <a href="profile.php">Go Back</a>
        </fieldset>
    </form>
</body>
</html>


<?php
    if (isset($_POST["submitButton"])) {
        $email = $_SESSION["email"];
        if(empty($_FILES['myfile']['name'])) {
            echo "Please enter a file";
        }
        //[type] => image/jpeg
        else if($_FILES['myfile']['type']!="image/jpeg") {
            echo "Only jpeg's are allowed";
        }
        else {
            // print_r($_FILES);
            // echo "<br>";
            // echo $_FILES['myfile']['name'];
            $filedir = 'profilepictures/'.$email.'.jpg';

            if(move_uploaded_file($_FILES['myfile']['tmp_name'], $filedir)){
                echo "Image Uploaded Successfully";
            }else{
                echo "error";
            }

        }

    }   

?>