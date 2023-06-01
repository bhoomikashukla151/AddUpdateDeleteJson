<?php
    include 'header.php';

    if (isset($_GET['logout'])) {
        session_unset();
    }

    loginform();

    if (isset($_GET['wrong'])) {
        echo 'please enter correct email and password!';
    }
    include 'footer.php';
?>