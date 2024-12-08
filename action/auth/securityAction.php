<?php
    session_start();
    if(!isset($_SESSION['isLogin']) && !isset($login)){
        header('location: ../../views/auth/login.php'); 
    }
?>   