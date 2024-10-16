<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ./login.php');
    exit();
}
    //connexion à la base de données
    include './dbconnect.php';
    //requete update
    if (!empty($_POST)){
        //récupération des données saisies
        $nom= $_POST['nom'];
        $prenom=$_POST['prenom'];
        $date_naissance=$_POST['date_naissance'];
        $tel= $_POST['tel'];
        $adresse= $_POST['adresse'];
        $email= $_POST['email'];
        $password= $_POST['password'];
        $avatar= $_POST['avatar'];
        $role= $_POST['role'];
        //réception de id
        $id = $_POST['id'];
        
        
        $sql = "UPDATE user 
                SET
                nom = :nom,
                prenom = :prenom,
                date_naissance = :date_naissance,
                tel = :tel,
                adresse = :adresse,
                email = :email,
                password = :password,
                avatar = :avatar,
                role = :role
                
                WHERE id = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':nom', $nom);
                $query->bindValue(':prenom', $prenom);
                $query->bindValue(':date_naissance', $date_naissance);
                $query->bindValue(':tel', $tel);
                $query->bindValue(':adresse', $adresse);
                $query->bindValue(':email', $email);
                $query->bindValue(':password', password_hash($password,PASSWORD_DEFAULT));
                $query->bindValue(':avatar', $avatar);
                $query->bindValue(':role', $role);
                $query->bindValue(':id', $id);
                $query->execute();

                header('Location: gererUSERS.php');
                exit;
        }
    



    //requete selection données de la base des données
    $query = $pdo->prepare('SELECT * FROM user WHERE id= ?');
    $query->execute([$_GET['id']]);
    $user = $query->fetch();




    
    $template="modifierUser";
    $pagetitle="Modifer User";
    include "layout.phtml";
?>