<?php
    session_start();

    //CHECK IF THE USER IS ALREADY LOGGED IN OR NOT
    if(isset($_SESSION["loginStatus"])) {
        
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
    $file = fopen("dummyData.txt",'r');
    $giantString = "";
    while(!feof($file)) {
        $data = fgets($file);
        //echo $data;
        $giantString = $giantString.$data;
    }
    fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <fieldset>
        <legend>Home</legend>
        <table width=100%>
            <tr>
                <td><a href="profile.php">Go To Profile</a></td>
                <td align=right><a href="logout.php">Log Out</a></td>
            </tr>
        </table>
        <fieldset>
            <legend>Dummy Data</legend>
            <form action="" method="post">
                <textarea name="dummyData" id="" cols="60" rows="20"><?php echo $giantString; ?></textarea>
                <br>
                <input type="submit" name="changeText" value="Change">
            </form>
        </fieldset>
    </fieldset>
</body>
</html>

<?php
    if(isset($_POST["changeText"])) {
        $file = fopen("dummyData.txt",'w');
        $changeText = $_POST["dummyData"];
        fwrite($file,$changeText);
        fclose($file);
        header("Refresh:0");
    }
?>

