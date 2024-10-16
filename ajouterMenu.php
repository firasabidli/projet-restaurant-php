<?php

session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}
 //connexion à la base de données
 include './dbconnect.php';
include 'utilities.php';

$errors = [];
$title = '';
$price = '';
$image = '';

if (!empty($_POST)) {
    $title = checkData($_POST['title']);
    $price = checkData($_POST['price']);
   $image="./assets/images/".$_POST['image'];

    if (empty($title)) {
        $errors['title'] = 'Title is required';
    }
    if (empty($price)) {
        $errors['price'] = 'Prix is required';
    }
    

    if (empty($errors)) {
        $sql = "INSERT INTO menu (title, price, image) VALUES (?, ?, ?)";
        $query = $pdo->prepare($sql);
        $query->execute([$title, $price, $image]);

        header('Location: gererMENU.php');
        exit;
    }
}

$template = 'ajouterMENU';
$pageTitle = 'Ajouter Menu';
include 'layout.phtml';