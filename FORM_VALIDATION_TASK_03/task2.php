<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Email <br>
        <input type="text" name="email" value=""> <br>
        <button type="submit" name="submitButton">Submit</button>
    </form>
</body>
</html>

<?php
    if (!empty($_POST)) {
        $email = $_POST["email"];
        if($email == ""){
            echo "Email cannot be empty";
        }
        else if (!strpos($email,"@") && !strpos($email,".com")) {
            echo "Enter a valid email";
        }
    }
?>