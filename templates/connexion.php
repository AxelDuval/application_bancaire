<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}


// On récupère tout le contenu de la table banque_PHP.User
$sqlQuery = 'SELECT * FROM banque_PHP.User';
$usersStatement = $db->prepare($sqlQuery);
$usersStatement->execute();
$users = $usersStatement->fetchAll();

// On affiche chaque utilisateur
foreach ($users as $user) {
?>
    <p>Prénom : <?php echo $user['first_name']; ?></p>
    <p>Nom : <?php echo $user['last_name']; ?></p>
    <p>Date de naissance :<?php echo $user['birthday']; ?></p>
    <p>Mot de passe : <?php echo $user['passwordHash']; ?></p>
<?php
}

?>