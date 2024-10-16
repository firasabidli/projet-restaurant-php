<?php

session_start();
session_destroy();
unset($_SESSION['iduser']);            
unset($_SESSION['username']);
unset($_SESSION['email']);
unset($_SESSION['avatar']);
unset($_SESSION['role']);
header('Location: ./login.php');
?>