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
            <legend>Gender</legend>
            <input type="radio" name="radioButton" value="Male">Male
            <input type="radio" name="radioButton" value="Female">Female
            <input type="radio" name="radioButton" value="Other">Other
        </fieldset>
        <button type="submit" name="button">Submit</button>
    </form>
</body>
</html>

<?php
    if (isset($_POST["radioButton"])) {
        $selected_radio = $_POST["radioButton"];
        echo $selected_radio;
    }
    else{
        echo "must select at least 1 gender";
    }
?>