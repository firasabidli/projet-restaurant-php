
    <?php
    session_start();
    if (!isset($_SESSION['username'])) {
        header('Location: ./login.php');
        exit();
    }
    //connexion à la base de données
    include 'dbconnect.php';
   
   
   $query = $pdo->prepare('SELECT * FROM user WHERE id= ?');
   $query->execute([$_GET['iduser']]);

    $user =$query ->fetch();
    $pagetitle="user details";
    $template= "user_details";
    include "./layout.phtml";
    ?>
    