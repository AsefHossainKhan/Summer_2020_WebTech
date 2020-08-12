<?php
    session_start();
    if (isset($_COOKIE["rememberMeEmail"])) {
        $email = $_COOKIE["rememberMeEmail"];
        $tableName = "coaches";
        $query = "SELECT * FROM $tableName WHERE email='$email'";
        $connection = mysqli_connect('127.0.0.1', 'root', '', 'coaching');
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_assoc($result);
        $_SESSION["name"] = $row["name"];
        $_SESSION["password"] = $row["password"];
        //$_SESSION["email"] = $row["email"];
        $_SESSION["gender"] = $row["gender"];
        $_SESSION["mobileNumber"] = $row["mobileNumber"];
        $_SESSION["primaryRole"] = $row["primaryRole"];
        $_SESSION["mmr"] = $row["mmr"];
        $_SESSION["steamLink"] = $row["steamLink"];
        $_SESSION["dotabuffLink"] = $row["dotabuffLink"];
        $_SESSION["achievements"] = $row["achievements"];
        $_SESSION["fees"] = $row["fees"];
        $_SESSION["schedule"] = $row["schedule"];
        
        $_SESSION["loginStatus"] = true;

        header("Location: ".$_SESSION["currentLink"]."");

    }
    else {
        header("Location: login.php");
    }
?>
