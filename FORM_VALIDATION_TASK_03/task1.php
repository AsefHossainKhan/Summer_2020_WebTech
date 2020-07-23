<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Name <br>
        <input type="text" name="name" value=""> <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    function checkFirstLetter($x) {
        if (ctype_alpha($x)){
            return false;
        }
        return true;
    }
    function checkTwoWords($x) {
        if (!strpos($x, ' ')){
            return true;
        }
        return false;
    }
    function checkAllCharacter($x) {
        if (ctype_alpha($x) || $x == '.' || $x == '-') {
            return false;
        }
        return true;
    }
    if (!empty($_POST)) {
        $name = $_POST["name"];
        if ($name == "") {
            echo "cannot be empty";
        }
        else if(checkFirstLetter($name[0])) {
            echo "First letter must be an alphabet";
        }
        else if(checkTwoWords($name)) {
            echo "Must contain at least two words";
        }
        else if(checkAllCharacter($name)){
            echo "Must contain alphabets, . , - only";
        }
    }
?>