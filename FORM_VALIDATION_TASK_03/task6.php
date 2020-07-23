<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">    
        Blood Group
        <Select name="bloodGroup">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
        </Select>
        <br>
        <hr>
        <button type="submit" name="submitButton">Submit</button>
    </form>
</body>
</html>


<?php
    if (isset($_POST["submitButton"])) {
        $bloodGroup = $_POST["bloodGroup"];
        echo $bloodGroup;
    }
?>