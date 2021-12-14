<?php
try {
  $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
  echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
  die();
}

if (isset($_POST['account_type']) && isset($_POST['account_amount'])){
  $account_type =  htmlspecialchars($_REQUEST['account_type']);
  $account_number =  rand(50000000, 3000000000);
  $account_amount =  htmlspecialchars($_REQUEST['account_amount']);
  $account_creation_date = date("Y-m-d");
}

$req = $db->prepare('INSERT INTO accounts(
  account_type,
  account_number,
  account_amount,
  account_creation_date
) VALUES(
  ?,
  ?,
  ?,
  ?
  )');
$req->execute([$account_type, $account_number, $account_amount, $account_creation_date]);

include('templates/header.php');
include('templates/nav.php');
include('templates/accounts_list.php');
echo "<div class='alert alert-success m-3 text-center' role='alert'>Le compte a bien été créé !</div>";
include('templates/footer.php');
exit();
