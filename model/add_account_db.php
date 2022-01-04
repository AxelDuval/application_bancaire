<?php
include('../mysql.php');

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

include('../templates/header.php');
include('../templates/nav.php');
include('../view/accounts_list.php');
echo "<div class='alert alert-success m-3 text-center' role='alert'>Le compte a bien été créé !</div>";
include('../templates/footer.php');
exit();
