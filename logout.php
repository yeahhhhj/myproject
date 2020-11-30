<?php
    session_start();
    session_destroy();
    unset($_SESSION['email']);
    $_SESSION['message'] = "you are logged out";
    header("location: mainclass.php")
?>