<?php
    //DATABASE CONNECTION
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'dota2coaching');


    //INITIALIZING VARIABLES
    $name = "";
    $nameBool = false;
    $password = "";
    $passwordBool = false;
    $confirmPassword = "";
    $email = "";
    $emailBool = false;
    $gender = "";
    $genderBool = false;
    $mobileNumber = "";
    $mobileNumberBool = false;
    $primaryRole = "";
    $primaryRoleBool = false;
    $mmr = "";
    $mmrBool = false;
    $steamLink = "";
    $steamLinkBool = false;
    $dotabuffLink = "";
    $dotabuffLinkBool = false;
    $achievements ="";
    $achievementsBool = false;
    $fees = "";
    $feesBool = false;
    $schedule = "";
    $scheduleBool = false;

    $buttonClicked = false;

    //ON SUBMIT BUTTON CLICK
    if(isset($_POST["submitButton"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        $email = $_POST["email"];
        //$gender = $_POST["gender"];
        $mobileNumber = $_POST["mobileNumber"];
        $primaryRole = $_POST["primaryRole"];
        $mmr = $_POST["mmr"];
        $steamLink = $_POST["steamLink"];
        $dotabuffLink = $_POST["dotabuffLink"];
        $achievements = $_POST["achievements"];
        $fees = $_POST["fees"];
        $schedule = $_POST["schedule"];
        
        $buttonClicked = true;
    }

    //INDIVIDUAL FUNCTIONS
    function checkName($name = "") {
        global $nameBool;
        if($name == "") {
            echo "Name cannot be empty";
        }
        else {
            $nameChecker = $name;
            $nameChecker = str_replace(' ','',$nameChecker);
            $nameChecker = str_replace('-','',$nameChecker);
            $nameChecker = str_replace('.','',$nameChecker);
            if(!ctype_alpha($nameChecker)) {
                echo "Must contain alphabets, . , - only";
            }
            else {
                $nameBool = true;
            }
        }
    }

    function checkPassword($password = "") {
        if($password == "") {
            echo "Password cannot be empty";
        }
    }

    function checkConfirmPassword($confirmPassword = "", $password = "") {
        global $passwordBool;
        if($confirmPassword == "") {
            echo "Password cannot be empty";
        }
        else if($password != $confirmPassword) {
            echo "Passwords don't match";
        }
        else {
            $passwordBool = true;
        }
    }

    function checkEmail($email) {
        global $emailBool;
        if($email == ""){
            echo "Email cannot be empty";
        }
        else if (!strpos($email,"@") || !strpos($email,".com")) {
            echo "Enter a valid email";
        }
        else {
            $emailBool = true;
        }
    }

    function checkGender() {
        global $genderBool;
        global $gender;
        if (!isset($_POST["gender"])) {
            echo "Must select a gender";
        }
        else {
            $gender = $_POST["gender"];
            $genderBool = true;
        }
    }

    function checkMobileNumber($mobileNumber = "") {
        global $mobileNumberBool;
        $mobileNumberBool = true;
    }

    function checkPrimaryRole() {
        global $primaryRoleBool;
        $primaryRoleBool = true;
    }

    function checkMMR($mmr = "") {
        global $mmrBool;
        if ($mmr == "") {
            echo "mmr cannot be empty";
        }
        else {
            $mmrBool = true;
        }
    }

    function checkSteamLink($steamLink = "") {
        global $steamLinkBool;
        if ($steamLink == "") {
            echo "Steam Link cannot be empty";
        }
        else {
            $steamLinkBool = true;
        }
    }

    function checkDotabuffLink($dotabuffLink = "") {
        global $dotabuffLinkBool;
        if ($dotabuffLink == "") {
            echo "Dotabuff Link cannot be empty";
        }
        else {
            $dotabuffLinkBool = true;
        }
    }

    function checkAchievements($achievements = "") {
        global $achievementsBool;
        $achievementsBool = true;
    }

    function checkFees($fees = "") {
        global $feesBool;
        if ($fees == "") {
            echo "Fees cannot be empty";
        }
        else {
            $feesBool = true;
        }
    }

    function checkSchedule($schedule = "") {
        global $scheduleBool;
        $scheduleBool = true;
    }

    function updateDatabase($name,$password,$email,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule) {
        global  $nameBool;
        global  $passwordBool;
        global  $emailBool;
        global  $genderBool;
        global  $mobileNumberBool;
        global  $primaryRoleBool;
        global  $mmrBool;
        global  $steamLinkBool;
        global  $dotabuffLinkBool;
        global  $achievementsBool;
        global  $feesBool;
        global  $scheduleBool;
        global  $connection;

        if ($nameBool && $passwordBool && $emailBool && $genderBool && $primaryRoleBool && $mmrBool && $steamLinkBool && $dotabuffLinkBool && $feesBool) {
            $tableName = "coaches";
            $query = "INSERT INTO $tableName (name, password, email, gender, mobilenumber, primaryrole, mmr, steamlink, dotabufflink, achievements, fees, schedule) VALUES ('$name','$password','$email','$gender','$mobileNumber','$primaryRole','$mmr','$steamLink','$dotabuffLink','$achievements','$fees','$schedule')";
            mysqli_query($connection,$query);

            header("Location: Login.php");
        }
        else {
            var_dump($nameBool);
            var_dump($passwordBool);
            var_dump($emailBool);
            var_dump($genderBool);
            var_dump($primaryRoleBool);
            var_dump($mmrBool);
            var_dump($steamLinkBool);
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coach Registration Page</title>
</head>
<body>
    <fieldset>
        <legend><b>REGISTRATION FOR COACH</b></legend>
        <form action = "" method="post">
            <table width=100%>
                <tr>
                    <td>Name*</td>
                    <td>:</td>
                    <td><input type="text" value="" name="name">
                        <?php checkName($name); ?>
                    </td>
                </tr>
                <tr>
                    <td>Password*</td>
                    <td>:</td>
                    <td><input type="password" value="" name="password">
                        <?php checkPassword($password); ?>
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password*</td>
                    <td>:</td>
                    <td><input type="password" value="" name="confirmPassword">
                        <?php checkConfirmPassword($confirmPassword, $password); ?>
                    </td>
                </tr>
                <tr>
                    <td>Email*</td>
                    <td>:</td>
                    <td><input type="text" value="" name="email">
                        <?php checkEmail($email); ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender*</td>
                    <td>:</td>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <input type="radio" name="gender" value="Other">Other
                        <?php checkGender(); ?>
                    </td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>:</td>
                    <td><input type="number" value="" name="mobileNumber">
                        <?php checkMobileNumber($mobileNumber); ?>
                    </td>
                </tr>
                <tr>
                    <td>Primary Role*</td>
                    <td>:</td>
                    <td>
                        <Select name="primaryRole">
                            <option value="Pos1">Position 1</option>
                            <option value="Pos2">Position 2</option>
                            <option value="Pos3">Position 3</option>
                            <option value="Pos4">Position 4</option>
                            <option value="Pos5">Position 5</option>
                        </Select>
                        <?php checkPrimaryRole(); ?>
                    </td>
                </tr>
                <tr>
                    <td>MMR*</td>
                    <td>:</td>
                    <td><input type="number" value="" name="mmr">
                        <?php checkMMR($mmr); ?>
                    </td>
                </tr>
                <tr>
                    <td>Steam Link*</td>
                    <td>:</td>
                    <td><input type="text" value="" name="steamLink">
                        <?php checkSteamLink($steamLink); ?>
                    </td>
                </tr>
                <tr>
                    <td>Dotabuff Link*</td>
                    <td>:</td>
                    <td><input type="text" value="" name="dotabuffLink">
                        <?php checkDotabuffLink($dotabuffLink); ?>
                    </td>
                </tr>
                <tr>
                    <td>Achievements</td>
                    <td>:</td>
                    <td><textarea name="achievements" id="" cols="30" rows="10" value=""></textarea>
                        <?php checkAchievements($achievements); ?>
                    </td>
                </tr>
                <tr>
                    <td>Fees per hour*</td>
                    <td>:</td>
                    <td><input type="number" value="" name="fees"> tk
                        <?php checkFees($fees); ?>
                    </td>
                </tr>
                <tr>
                    <td>Schedule</td>
                    <td>:</td>
                    <td><textarea name="schedule" id="" cols="30" rows="10" value=""></textarea>
                        <?php checkSchedule($schedule); ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="Submit" name="submitButton"></td>
                </tr>
            </table>
        </form>
    </fieldset>
</body>
</html>

<?php
    if($buttonClicked) {
        updateDatabase ($name,$password,$email,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule);
    }
?>