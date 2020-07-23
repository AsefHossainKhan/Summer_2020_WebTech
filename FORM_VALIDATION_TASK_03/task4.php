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
            <legend>Date of Birth</legend>
            dd &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; mm &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; yy<br>
            <input type="number" size="1" maxlength="2" name="day">/
            <input type="number" size="1" maxlength="2" name="month">/
            <input type="number" size="1" maxlength="4" name="year">
            <hr>
            <button type="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>

<?php
    if (!empty($_POST)) {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];

        if($day == "" || $month == "" || $year == "") {
            echo "Date fields cannot be empty";
        }
        else if(!($day>= 1 && $day<=31 || $month>=1 && $month<=12 || $year>=1900 && $year<=2016)) {
            echo "Enter a valid day/month/year";
        }

    }
?>


