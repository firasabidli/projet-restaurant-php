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
        $nom='';
        $prenom='';
        $date_nais='';
        $tel='';
        $adresse='';
        $email='';
        $password='';
        $avatar='';
        $role='';

if (!empty($_POST)) {
    $nom=checkData($_POST['nom']);
    $prenom=checkData($_POST['prenom']);
    $date_nais=checkData($_POST['date_nais']);
    $tel=checkData($_POST['tel']);
    $adresse=checkData($_POST['adresse']);
    $email=checkData($_POST['email']);
    $password=checkData($_POST['password']);
    $avatar="./assets/images/avatar/".$_POST['avatar'];
    $role=$_POST['role'];
  

    if (empty($nom)) {
        $errors['nom'] = 'Nom is required';
    }
    if (empty($prenom)) {
        $errors['prenom'] = 'Prenom is required';
    }
    if (empty($date_nais)) {
        $errors['date_nais'] = 'Date de naissance is required';
    }
    if (empty($tel)) {
        $errors['tel'] = 'Numéro du téléphone is required';
    }
    if (empty($adresse)) {
        $errors['adresse'] = 'adresse is required';
    }
    if (empty($email)) {
        $errors['email'] = 'Date de naissance is required';
    }
    if (empty($password)) {
        $errors['password'] = 'Password is required';
    }
    
    
    

    if (empty($errors)) {
        $sql = "INSERT INTO user (nom, prenom, date_naissance,tel,adresse,email,password,role,avatar) VALUES (:nom,:prenom,:date_naissance,:tel,:adresse,:email,:password,:role,:avatar)";
        $query = $pdo->prepare($sql);
        $query->execute([

            'nom' => $nom,
            'prenom' => $prenom,
            'date_naissance' => $date_nais,
            'tel' => $tel,
            'adresse' => $adresse,
            'email' => $email,
            'password' => password_hash($password,PASSWORD_DEFAULT),
            'role' => $role,
            'avatar' => $avatar,
            
        ]);
        header('Location: gererUSERS.php');
        exit;
    }
}

$template = 'ajouterUser';
$pageTitle = 'Ajouter User';
include 'layout.phtml';