<?php
    //DATABASE CONNECTION
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'mid_mini_project');

    //starting session
    Session_start();

    $id = $_POST["id"];
    $password = $_POST["password"];
    if(empty($id) || empty($password)){
        echo "empty fields found";
    }
    else {
        if (isset($_POST["rememberMe"])) {
            setcookie("loginStatus", $id, time()+3600);
        }
        $tableName = "userinfo";
        $query = "SELECT * FROM $tableName WHERE id='$id' AND password='$password'";
        
        $result = mysqli_query($connection, $query);

        if($row = mysqli_fetch_assoc($result)) {
            $_SESSION["id"] = $id;
            $_SESSION["name"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["usertype"] = $row["usertype"];
            if($row["usertype"] == "Admin") {
                echo "admin";
            }
            else {
                echo "user";
            }
        }
        else {
            echo "username/password incorrect";
        }
    }
?>