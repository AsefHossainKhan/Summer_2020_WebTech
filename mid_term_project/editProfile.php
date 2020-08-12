<?php
    session_start();

    //CHECK IF THE USER IS ALREADY LOGGED IN OR NOT
    if(isset($_SESSION["loginStatus"])) {
        //everything is good if it goes here
    }
    else if(isset($_COOKIE["rememberMeEmail"])) {
        $_SESSION["currentLink"] = "home.php";
        header("Location: rememberMe.php");
    }
    else {
        header("Location: login.php");
    }
?>

<?php
    ob_start();
    //DATABASE CONNECTION
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'coaching');


    //INITIALIZING VARIABLES
    $name = $_SESSION["name"];
    $nameBool = false;
    $password = $_SESSION["password"];
    $passwordBool = false;
    $confirmPassword = $_SESSION["password"];
    $email = $_SESSION["email"];
    $emailBool = false;
    $gender = $_SESSION["gender"];
    $genderBool = false;
    $mobileNumber = $_SESSION["mobileNumber"];
    $mobileNumberBool = false;
    $primaryRole = $_SESSION["primaryRole"];
    $primaryRoleBool = false;
    $mmr = $_SESSION["mmr"];
    $mmrBool = false;
    $steamLink = $_SESSION["steamLink"];
    $steamLinkBool = false;
    $dotabuffLink = $_SESSION["dotabuffLink"];
    $dotabuffLinkBool = false;
    $achievements = $_SESSION["achievements"];
    $achievementsBool = false;
    $fees = $_SESSION["fees"];
    $feesBool = false;
    $schedule = $_SESSION["schedule"];
    $scheduleBool = false;

    $buttonClicked = false;

    //ON SUBMIT BUTTON CLICK
    if(isset($_POST["submitButton"])) {
        $name = $_POST["name"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];
        //$email = $_POST["email"];
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
        else if (checkNotUniqueEmail($email)) {
            echo "Email already in use";
        }
        else {
            $emailBool = true;
        }
    }

    function checkNotUniqueEmail($email) {
        global $connection;
        $query = "SELECT email FROM coaches WHERE email='$email'";
        $result = mysqli_query($connection, $query);

        if(mysqli_fetch_assoc($result)) {
            return true;
        }
        else {
            return false;
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

    function genderSetter($gender) {
		if($_SESSION["gender"] == $gender) {
			echo "checked = \"checked\"";
		}
		else {
		}
    }

    function positionSetter($primaryRole) {
		if($_SESSION["primaryRole"] == $primaryRole) {
			echo "selected";
		}
		else {
		}
    }

    function updateDatabase($name,$password,$email,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule) {
        global  $nameBool;
        global  $passwordBool;
        //global  $emailBool;
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

        if ($nameBool && $passwordBool && $genderBool && $primaryRoleBool && $mmrBool && $steamLinkBool && $dotabuffLinkBool && $feesBool) {
            $tableName = "coaches";
            //$query = "INSERT INTO $tableName (name, password, email, gender, mobilenumber, primaryrole, mmr, steamlink, dotabufflink, achievements, fees, schedule) VALUES ('$name','$password','$email','$gender','$mobileNumber','$primaryRole','$mmr','$steamLink','$dotabuffLink','$achievements','$fees','$schedule')";
            $query = "UPDATE $tableName SET name='$name', password='$password', gender='$gender', mobilenumber='$mobileNumber', primaryrole='$primaryRole', mmr='$mmr', steamlink='$steamLink', dotabufflink='$dotabuffLink', achievements='$achievements', fees='$fees', schedule='$schedule' WHERE email='$email'";
            try {
                mysqli_query($connection,$query);
                mysqli_close($connection);
                //header("Location: login.php");
                header("Location: profile.php");
            }catch (Exception $e){
                echo "Email already in use";
            }
        }
        else {
            // var_dump($nameBool);
            // var_dump($passwordBool);
            // var_dump($emailBool);
            // var_dump($genderBool);
            // var_dump($primaryRoleBool);
            // var_dump($mmrBool);
            // var_dump($steamLinkBool);
        }
    }

    function updateSession($name,$password,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule) {
        $_SESSION["name"] = $name;
        $_SESSION["password"] = $password;
        //$_SESSION["email"] = $email;
        $_SESSION["gender"] = $gender;
        $_SESSION["mobileNumber"] = $mobileNumber;
        $_SESSION["primaryRole"] = $primaryRole;
        $_SESSION["mmr"] = $mmr;
        $_SESSION["steamLink"] = $steamLink;
        $_SESSION["dotabuffLink"] = $dotabuffLink;
        $_SESSION["achievements"] = $achievements;
        $_SESSION["fees"] = $fees;
        $_SESSION["schedule"] = $schedule;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <fieldset>
        <legend><b>EDIT PROFILE</b></legend>
        <form action = "" method="post">
            <table width=100%>
                <tr>
                    <td>Name*</td>
                    <td>:</td>
                    <td><input type="text" value=<?php echo $name; ?> name="name">
                        <?php if($buttonClicked)checkName($name); ?>
                    </td>
                </tr>
                <tr>
                    <td>Password*</td>
                    <td>:</td>
                    <td><input type="password" value=<?php echo $password; ?> name="password">
                        <?php if($buttonClicked)checkPassword($password); ?>
                    </td>
                </tr>
                <tr>
                    <td>Confirm Password*</td>
                    <td>:</td>
                    <td><input type="password" value=<?php echo $confirmPassword; ?> name="confirmPassword">
                        <?php if($buttonClicked)checkConfirmPassword($confirmPassword, $password); ?>
                    </td>
                </tr>
                <tr>
                    <td>Gender*</td>
                    <td>:</td>
                    <td><input type="radio" name="gender" <?php genderSetter("Male"); ?> value="Male">Male
                        <input type="radio" name="gender" <?php genderSetter("Female"); ?> value="Female">Female
                        <input type="radio" name="gender" <?php genderSetter("Other"); ?> value="Other">Other
                        <?php if($buttonClicked)checkGender(); ?>
                    </td>
                </tr>
                <tr>
                    <td>Mobile Number</td>
                    <td>:</td>
                    <td><input type="number" value=<?php echo $mobileNumber; ?> name="mobileNumber">
                        <?php if($buttonClicked)checkMobileNumber($mobileNumber); ?>
                    </td>
                </tr>
                <tr>
                    <td>Primary Role*</td>
                    <td>:</td>
                    <td>
                        <Select name="primaryRole">
                            <option value="Pos1" <?php positionSetter("Pos1") ?>>Position 1</option>
                            <option value="Pos2" <?php positionSetter("Pos2") ?>>Position 2</option>
                            <option value="Pos3" <?php positionSetter("Pos3") ?>>Position 3</option>
                            <option value="Pos4" <?php positionSetter("Pos4") ?>>Position 4</option>
                            <option value="Pos5" <?php positionSetter("Pos5") ?>>Position 5</option>
                        </Select>
                        <?php if($buttonClicked)checkPrimaryRole(); ?>
                    </td>
                </tr>
                <tr>
                    <td>MMR*</td>
                    <td>:</td>
                    <td><input type="number" value=<?php echo $mmr; ?> name="mmr">
                        <?php if($buttonClicked)checkMMR($mmr); ?>
                    </td>
                </tr>
                <tr>
                    <td>Steam Link*</td>
                    <td>:</td>
                    <td><input type="text" value=<?php echo $steamLink; ?> name="steamLink">
                        <?php if($buttonClicked)checkSteamLink($steamLink); ?>
                    </td>
                </tr>
                <tr>
                    <td>Dotabuff Link*</td>
                    <td>:</td>
                    <td><input type="text" value=<?php echo $dotabuffLink; ?> name="dotabuffLink">
                        <?php if($buttonClicked)checkDotabuffLink($dotabuffLink); ?>
                    </td>
                </tr>
                <tr>
                    <td>Achievements</td>
                    <td>:</td>
                    <td><textarea name="achievements" id="" cols="30" rows="10"><?php echo $achievements; ?></textarea>
                        <?php if($buttonClicked)checkAchievements($achievements); ?>
                    </td>
                </tr>
                <tr>
                    <td>Fees per hour*</td>
                    <td>:</td>
                    <td><input type="number" value=<?php echo $fees; ?> name="fees"> tk
                        <?php if($buttonClicked)checkFees($fees); ?>
                    </td>
                </tr>
                <tr>
                    <td>Schedule</td>
                    <td>:</td>
                    <td><textarea name="schedule" id="" cols="30" rows="10" ><?php echo $schedule; ?></textarea>
                        <?php if($buttonClicked)checkSchedule($schedule); ?>
                    </td>
                </tr>
                <tr>
                    <td><a href="profile.php">Go Back</a></td>
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
        updateSession ($name,$password,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule);
        updateDatabase ($name,$password,$email,$gender,$mobileNumber,$primaryRole,$mmr,$steamLink,$dotabuffLink,$achievements,$fees,$schedule);
        
    }
?>