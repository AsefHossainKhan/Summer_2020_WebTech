<fieldset>
    <legend><b>FORGOT PASSWORD</b></legend>
    <form action="" method="post">
		Enter Email:
        <input type="text" name="email"/>
        <hr />
        <input type="submit" value="Submit" name="submitButtom"/>
    </form>
</fieldset>

<?php
    session_start();
    function verifyEmail() {
        if($_POST["email"] == $_SESSION["email"]) {
            echo "email verified";
        }
        else {
            echo "incorrect Email";
        }
    }
    verifyEmail();
?>