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
        $title= $_POST['title'];
        $price=$_POST['price'];
        $image=$_POST['image'];
        //réception de id
        $id = $_POST['id'];
        
        
        $sql = "UPDATE menu 
                SET
                title = :title,
                price = :price,
                image = :image
                WHERE idmenu = :id";
                $query = $pdo->prepare($sql);
                $query->bindValue(':title', $title);
                $query->bindValue(':price', $price);
                $query->bindValue(':image', $image);
                $query->bindValue(':id', $id);
                $query->execute();

                header('Location: gererMENU.php');
                exit;
        }
    



    //requete selection données de la base des données
    $query = $pdo->prepare('SELECT * FROM menu WHERE idmenu= ?');
    $query->execute([$_GET['id']]);
    $menu = $query->fetch();




    //var_dump($todo);
    $template="modifierMENU";
    $pagetitle="Modifer Menu";
    include "layout.phtml";
?>