<!DOCTYPE html>
<html>
<head>
    <title>Person Profile</title>
</head>
<body>
    <form>
        <table border= "1">
            <tr>
                <td colspan="3"><center><h3>PERSON PROFILE</h3></center></td>
            </tr>
            <tr>
                <td>Name</td>
                <td><input type="text"></td>
                <td width="20px"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="text"></td>
                <td></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td><input type="radio" name="gender">Male
                    <input type="radio" name="gender">Female
                    <input type="radio" name="gender">Other</td>
                <td></td>
            </tr>
            <tr>
                <td>Date Of Birth</td>
                <td><input type="value" maxlength="2" size="1">/
                    <input type="value" maxlength="2" size="1">/
                    <input type="value" maxlength="4" size="1"> <i>(dd/mm/yyyy)</i></td>
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
                    <input type="checkbox">SSC
                    <input type="checkbox">HSC
                    <input type="checkbox">BSc.
                    <input type="checkbox">MSc.
                </td>
                <td></td>
            </tr>
            <tr>
                <td>Photo</td>
                <td colspan="2"><input type="file"></td>
            </tr>
            <tr>
                <td colspan="3" height="25px"></td>
            </tr>
            <tr>
                <td colspan="3" align="right">
                    <Button type="submit" >Submit</Button>
                    <button type="reset">Reset</button>
                </td>
            </tr>

        </table>
    </form>
    
</body>
</html>