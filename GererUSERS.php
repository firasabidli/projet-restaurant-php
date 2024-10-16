    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ./login.php');
        exit();
    }
    //connexion à la base de données
    include './dbconnect.php';
    
    $query = $pdo->prepare("SELECT * FROM user ");
    $query->execute();
    
    $users = $query->fetchAll();
    
    $template="GererUSERS";
    $pagetitle="GERER USERS";
    include "layout.phtml";
    ?>
   