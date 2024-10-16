<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}
    //connexion à la base de données
    include './dbconnect.php';
    
    $query = $pdo->prepare("SELECT * FROM menu ");
    $query->execute();
    
    $menus = $query->fetchAll();
    
    $template="indexADMIN";
    $pagetitle="Home";
    include "./layout.phtml";
    ?>