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
            <legend>Degree</legend>
            <input type="checkbox" name="SSC">SSC
            <input type="checkbox" name="HSC">HSC
            <input type="checkbox" name="BSC">BSc.
        </fieldset>
        <button type="submit" name="submitButton">Submit</button>
    </form>
</body>
</html>


<?php
    if (isset($_POST["submitButton"])) {
        if(empty($_POST["SSC"]) && empty($_POST["HSC"]) && empty($_POST["BSC"])) {
            echo "One degree must be selected";
        }

    }
?>