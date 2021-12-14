<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}


// On récupère tout le contenu de la table accounts
$sqlQuery = 'SELECT * FROM accounts WHERE owner_id = :usr_id';
$accountsStatement = $db->prepare($sqlQuery);
$accountsStatement->execute(["usr_id" => $_SESSION['user_id']]);
$accounts = $accountsStatement->fetchAll();

$user_db = 'SELECT first_name, last_name FROM user INNER JOIN accounts ON user.id = accounts.owner_id';
$userStatement = $db->prepare($user_db);
$userStatement->execute();
$user = $userStatement->fetchAll();

echo '<div class="row mx-4 p-3 mb-5">';
// On affiche chaque compte
for ($i=0; $i < sizeof($accounts); $i++) {
?>
  <div class='col-xl-3 col-md-6'>
    <div class='card bg-primary text-white mb-4'>
      <div class='card-body'>
        <p class='card-text'>Type de compte : <?php echo $accounts[$i]['account_type']; ?></p>
        <p class='card-text'>N° : <?php echo $accounts[$i]['account_number']; ?></p>
        <p class='card-text'>Solde : <?php echo $accounts[$i]['account_amount']; ?> €</p>
        <p class='card-text'>Date de création : <?php echo $accounts[$i]['account_creation_date']; ?></p>
        <p class='card-text'>Propriétaire : <?php echo  $user[$i]['first_name']; ?> <?php echo  $user[$i]['last_name']; ?></p>
        <p class='card-text'>Dernière opération : ...</p>
        <div class='small text-white'><a class='small text-white stretched-link' href='#'>Voir le détail</a></div>
      </div>
    </div>
  </div>


<?php
}
?>
</div>