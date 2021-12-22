<?php
// On récupère tout le contenu de la table accounts
$sqlQuery = 'SELECT * FROM accounts WHERE owner_id = :usr_id';
$accountsStatement = $db->prepare($sqlQuery);
$accountsStatement->execute(["usr_id" => $_SESSION['user_id']]);
$accounts = $accountsStatement->fetchAll();

$user_db = 'SELECT first_name, last_name FROM user INNER JOIN accounts ON user.id = accounts.owner_id';
$userStatement = $db->prepare($user_db);
$userStatement->execute();
$user = $userStatement->fetchAll();

$operation_db = 'SELECT  operation_date, operation_type, operation_amount FROM operations INNER JOIN accounts ON operations.id = operations.account_id';
$operationStatement = $db->prepare($operation_db);
$operationStatement->execute();
$operation = $operationStatement->fetchAll();

?>