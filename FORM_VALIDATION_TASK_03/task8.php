<!DOCTYPE html>
<html>
<head>
    <title>Person Profile</title>
</head>
<body>
    <form action="" method="post">
        <table border= "1">
            <tr>
                <td colspan="3"><center><h3>PERSON PROFILE</h3></center></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
                <td width="20px"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text" name="email"></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender" value="Male">Male
                    <input type="radio" name="gender" value="Female">Female
                    <input type="radio" name="gender" value="Other">Other</td>
                <td></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="number" maxlength="2" size="1" name="day" value="">/
                    <input type="number" maxlength="2" size="1" name="month" value="">/
                    <input type="number" maxlength="4" size="1" name="year" value=""> <i>(dd/mm/yyyy)</i></td>
                <td></td>
            </tr>
            <tr>
                <td>Blood Group</td>
                <td>
                    <Select>
                        <option>A+</option>
                        <option>A-</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB+</option>
                        <option>AB-</option>
                    </Select>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Degree</td>
                <td>
                    <input type="checkbox" name="SSC">SSC
                    <input type="checkbox" name="HSC">HSC
                    <input type="checkbox" name="BSC">BSc.
                    <input type="checkbox" name="MSC">MSc.
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td colspan="2"><input type="file" name="file"></td>
            </tr>
            <tr>
                <td colspan="3" height="25px"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <Button type="submit" name="submitButton">Submit</Button>
                    <button type="reset">Reset</button>
                </td>
            </tr>

        </table>
    </form>
    
</body>
</html>

<?php 
    //NAME CHECK METHOD
    function checkName($name) {
        if($name == "") {
            echo "Name cannot be empty";
        }
        else if(!ctype_alpha($name[0])) {
            echo "First letter must be an alphabet";
        }
        else if(!strpos($name, ' ')) {
            echo "Must have at least two words";
        }
        else {
            $nameChecker = $name;
            $nameChecker = str_replace(' ','',$nameChecker);
            $nameChecker = str_replace('-','',$nameChecker);
            $nameChecker = str_replace('.','',$nameChecker);
            if(!ctype_alpha($nameChecker)) {
                echo "Must contain alphabets, . , - only";
            }
        }
    }

    //EMAIL CHECK METHOD
    function checkEmail($email) {
        if($email == ""){
            echo "Email cannot be empty";
        }
        else if (!strpos($email,"@") || !strpos($email,".com")) {
            echo "Enter a valid email";
        }
    }

    //GENDER CHECK METHOD
    function checkGender() {
        if (!isset($_POST["gender"])) {
            echo "Must select a gender";
        }
    }

    //DATE OF BIRTH CHECK METHOD
    function checkDateOfBirth($day,$month,$year) {
        if($day == "" || $month == "" || $year == "") {
            echo "Date fields cannot be empty";
        }
        else if(!($day>= 1 && $day<=31 && $month>=1 && $month<=12 && $year>=1900 && $year<=2016)) {
            echo "Enter a valid day/month/year";
        }
    }

    //DEGREE CHECK METHOD
    function checkDegree() {
        if(empty($_POST["SSC"]) && empty($_POST["HSC"]) && empty($_POST["BSC"]) && empty($_POST["MSC"])) {
            echo "One degree must be selected";
        }
    }

    //BLOOD GROUP CHECK METHOD
    function checkBloodGroup() {
        //DIDNT NEED TO DO ANYTHING
    }

    function checkFile() {
        if(empty($_POST["file"])) {
            echo "choose a file";
        }
    }

    if(isset($_POST["submitButton"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];


        checkName($name);
        checkEmail($email);
        checkGender();
        checkDateOfBirth($day,$month,$year);
        checkDegree();
        checkBloodGroup();
        checkFile();
    }
?>