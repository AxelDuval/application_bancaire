<?php
include("config/mysql.php");

try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}


// Insertion en BDD

// Ecriture de la requete
$sqlQuery = $db->prepare('INSERT INTO accounts(
  account_type, 
  account_number, 
  account_amount, 
  account_creation_date,
  )
  VALUES (
  :account_type, 
  :account_number, 
  :account_amount, 
  :account_creation_date,
  )');

$insertAccount = $mysqlClient->prepare($sqlQuery);

$insertAccount->execute([
  'account_type' => $account_type,
  'account_number' => $account_number,
  'account_amount' => $account_amount,
  'account_creation_date' => $account_creation_date,
]);



if (isset($_POST['account_type']) && isset($_POST['account_amount'])) {

  $account_type = htmlspecialchars($_POST['account_type']);
  $account_amount = htmlspecialchars($_POST['account_amount']);
  $account_number = rand(1, 100);
  $account_creation_date = date_default_timezone_set('UTC');
}

?>

<form method="post" action="creation.php" class="row g-3 m-3">
  <h3>Créer un compte</h3>

  <div class="col-md-3">
    <label for="account_type" class="form-label">Type de compte</label>
    <select class="form-select" name="account_type" required>
      <option selected disabled value="">Choisir...</option>
      <option>Compte courant</option>
      <option>Livret A</option>
      <option>Compte epargne</option>
      <option>PEL</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="account_amount" class="form-label">Montant à créditer (50€ minimun)</label>
    <input type="number" class="form-control" name="account_amount" min="50" required>
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-warning">Envoyer</button>
  </div>
</form>