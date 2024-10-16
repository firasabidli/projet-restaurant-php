<?php
 //connexion à la base de données
 include './dbconnect.php';
$query = $pdo->prepare('DELETE FROM menu WHERE idmenu= :id_menu');
$query->execute([
    'id_menu' => $_GET['id']
]);

header('Location: gererMENU.php');
exit();
?>