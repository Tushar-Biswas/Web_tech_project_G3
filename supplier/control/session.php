<?php
     session_start();
     if(!isset($_SESSION['isValid'])){
         header('location: ../view/login.php');
     }
?>