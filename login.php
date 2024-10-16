<?php

session_start();
if (isset($_SESSION['username'])) {
   
    header('Location: indexADMIN.php');
       
}

include './dbconnect.php';

$errors = [];

if (isset($_POST['submit'])) {
   
    extract($_POST);

    if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $errors[0] = 'Email invalid';
        goto show_form;
    }

    if (strlen($password) < 6) {
        $errors[0] = 'Mot de passe doit etre au moins 6 caractere';
        goto show_form;
    }
    $sql = "SELECT * FROM user WHERE email = :email";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'email' => $email,
    ]);
    $userr = $stmt->fetch();
    if ($userr == false) {
        $errors[0] = 'Email ou mot de passe invalide';
        goto show_form;
    } else {
        if (password_verify($password, $userr['password'])) {
            $_SESSION['iduser'] = $userr['id'];
            $username=$userr['nom']." ".$userr['prenom'];
            $_SESSION['username'] = $username;
            $_SESSION['email'] = $userr['email'];
            $_SESSION['avatar'] = $userr['avatar'];
            $_SESSION['role'] = $userr['role'];

           
            if($userr['role']=='admin'){
            header('Location: indexADMIN.php');}
            else{
                header('Location: indexUSER.php');
            }
            
        } else {
            $errors[0] = 'Email ou mot de passe invalide';
            goto show_form;
        }
    }
  
}
show_form:
$template = 'login';
$pagetitle = 'Login';
include 'layout.phtml';
