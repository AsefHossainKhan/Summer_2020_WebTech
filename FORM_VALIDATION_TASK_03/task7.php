<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">    
        <fieldset>
            <legend>Profile Picture</legend>
            User ID <input type="text" name="userId" value=""><br>
            Picture <input type="file" name="file">
            <hr>
            <button type="submit" name="submitButton">Submit</button>
        </fieldset>
    </form>
</body>
</html>


<?php
    if (isset($_POST["submitButton"])) {
        $userId = $_POST["userId"];
        if($userId == ""){
            echo "enter a user ID";
        }
        else if(empty($_POST["file"])) {
            echo "choose a file";
        }
    }   
?>