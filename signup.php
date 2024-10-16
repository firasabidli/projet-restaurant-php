<?php

session_start();
if (isset($_SESSION['username'])) {
    if($_SESSION['role']== 'admin'){
    header('Location: ./indexADMIN.php');
    exit();}
    else {
        header('Location: ./indexUSER.php');
        exit();}
}
include './dbconnect.php';

$errors = [];

if (isset($_POST['submit'])) {
    extract($_POST);

    if (strlen(trim($nom)) < 3) {
        $errors[0] = 'Nom doit etre superieur à 3';
        goto show_form;
    }
    if (strlen(trim($prenom)) < 3) {
        $errors[0] = 'Prenom doit etre superieur à 3';
        goto show_form;
    }
    if ($date_nais== '') {
        $errors[0] = 'Date de naissance Invalid';
        goto show_form;
    }
    if (strlen(trim($tel)) != 8) {
        $errors[0] = 'Numero de téléphone invalid';
        goto show_form;
    }
    if (strlen(trim($adresse)) =='') {
        $errors[0] = "Adresse n'est pas vide ";
        goto show_form;
    }
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[0] = 'Email Invalid';
        goto show_form;
    }
    if (strlen($password) < 6) {
        $errors[0] = 'Password Invalid';
        goto show_form;
    }
   
    if ($confirm_password != $password) {
        $errors[0] = 'confirmer votre password';
        goto show_form;
    }
    $avatar="./assets/images/avatar/".$avatar;
    $sql = "INSERT INTO user (nom, prenom, date_naissance, tel, adresse, email, password, avatar) VALUES (:nom, :prenom, :date_nais, :tel, :adresse, :email, :password, :avatar)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom' => $nom,
        ':prenom'=> $prenom,
        ':date_nais'=> $date_nais,
        ':tel'=> $tel,
        ':adresse'=> $adresse,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        ':avatar'=> $avatar,
    ]);
    header('Location: ./login.php');
}
show_form:
$template = 'signup';
$pageTitle = 'Signup page';
include './layout.phtml';
