<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}


// On récupère tout le contenu de la table accounts
$sqlQuery = 'SELECT * FROM accounts';
$accountsStatement = $db->prepare($sqlQuery);
$accountsStatement->execute();
$accounts = $accountsStatement->fetchAll();

echo '<div class="row mt-4 p-3">';
// On affiche chaque compte
foreach ($accounts as $account) {
?>
  <div class='col-xl-3 col-md-6'>
    <div class='card bg-primary text-white mb-4'>
      <div class='card-body'>
        <p class='card-text'>Type de compte : <?php echo $account['account_type']; ?></p>
        <p class='card-text'>N° : <?php echo $account['account_number']; ?></p>
        <p class='card-text'>Solde : <?php echo $account['account_amount']; ?> €</p>
        <p class='card-text'>Date de création : <?php echo $account['account_creation_date']; ?></p>
        <p class='card-text'>Propriétaire : <?php echo $account['owner_id']; ?></p>
        <p class='card-text'>Dernière opération : ...</p>
      </div>
    </div>
  </div>


<?php
}
?>
</div>