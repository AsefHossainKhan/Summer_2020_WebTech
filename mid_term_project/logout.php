<?php
    session_start();
    session_destroy();
    setcookie("rememberMeEmail", $email, time()-3600);
    header("Location: login.php");
?>