<?php

    session_start();
    session_destroy();
    // setcookie('Valid','true', time()-100000, '/');
    header('location: login.php');
?>