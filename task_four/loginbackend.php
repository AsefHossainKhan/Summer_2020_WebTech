<?php
    session_start();
    if(isset($_POST["submitButton"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username == $_SESSION["username"] && $password == $_SESSION["password"]) {
            echo "login succeessful";
        }
        else {
            echo "username/password incorrect";
        }
    }
    else {
        echo "invalid request";
    }
?>