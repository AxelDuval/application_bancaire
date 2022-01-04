<?php
include('../mysql.php');

$id = $_GET['id'];


$sqlQuery = "SELECT account_amount FROM accounts WHERE id = $id";
$accountsStatement = $db->prepare($sqlQuery);
$accountsStatement->execute();
$accounts = $accountsStatement->fetchAll();


if (isset($_POST['operation_type']) && isset($_POST['operation_amount'])) {
    $operation_type =  htmlspecialchars($_REQUEST['operation_type']);
    $operation_amount =  htmlspecialchars($_REQUEST['operation_amount']);
    $operation_date = date("Y-m-d");
    $operation_status = "En cours";
    $account_id = $id;
}

if ($operation_type == 'Dépot') {
    $sql = "UPDATE accounts SET account_amount = account_amount + $operation_amount WHERE id= $id";
} else {
    $sql = "UPDATE accounts SET account_amount = account_amount - $operation_amount WHERE id= $id";
}

$accountsStatement = $db->prepare($sql);
$accountsStatement->execute();

$req = $db->prepare('INSERT INTO operations(
  operation_type,
  operation_amount,
  operation_date,
  operation_status,
  account_id
) VALUES(
  ?,
  ?,
  ?,
  ?,
  ?
  )');
$req->execute([$operation_type, $operation_amount, $operation_date, $operation_status, $account_id]);

include('../templates/header.php');
include('../templates/nav.php');
include('../view/accounts_list.php');
echo "<div class='alert alert-success m-3 text-center' role='alert'>L'opération a bien été effectuée !</div>";
include('../templates/footer.php');
exit();
