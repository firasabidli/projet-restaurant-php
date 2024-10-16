
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ./login.php');
        exit();
    }
    //connexion à la base de données
    include 'dbconnect.php';
   
   
   $query = $pdo->prepare('SELECT * FROM menu WHERE idmenu= ?');
   $query->execute([$_GET['id']]);

    $menu =$query ->fetch();
    $pagetitle="gerer menu";
    $template= "menu_details";
    include "layout.phtml";
    ?>
    