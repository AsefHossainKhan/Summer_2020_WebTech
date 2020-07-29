<?php
    session_start();
    if(isset($_POST["submitButton"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $username = $_POST["userName"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $dateOfBirth = $_POST["day"]."/".$_POST["month"]."/".$_POST["year"];
        // $day = $_POST["day"];
        // $month = $_POST["month"];
        // $year = $_POST["year"];
        //$dateOfBirth = $day + "/" + $month + "/" + $year;


        if(empty($name) || empty($email) || empty($username) || empty($password) || empty($gender) || empty($dateOfBirth)) {
            echo "empty fields found";
        }
        else {
            $_SESSION["name"] = $name;
            $_SESSION["email"] = $email;
            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;
            $_SESSION["gender"] = $gender;
            $_SESSION["dateOfBirth"] = $dateOfBirth;
            // $_SESSION["day"] = $day;
            // $_SESSION["month"] = $month;
            // $_SESSION["year"] = $year;

            //echo "Registration Successful";
            header ("location: login.html");
            // echo $username;
            // echo $password;

        }

    }

    else {
        echo "invalid request";
    }



?>