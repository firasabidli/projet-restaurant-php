<?php
 //connexion à la base de données
 include './dbconnect.php';
$query = $pdo->prepare('DELETE FROM user WHERE id= :id_user');
$query->execute([
    'id_user' => $_GET['id']
]);

header('Location: gererUSERS.php');
exit();
?>