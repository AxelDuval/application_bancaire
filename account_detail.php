<?php
include('templates/header.php');
include('templates/nav.php');
include_once('templates/login.php');
?>
<?php if(isset($_SESSION['LOGGED_USER'])): ?>
<?php

try {
    $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}

if (!empty($_GET) && isset($_GET['id'])) {
    $id = htmlspecialchars($_GET['id']);
} else {
    $error = 'Compte inconnu !';
}

$sqlQuery = "SELECT * FROM accounts WHERE id = $id";
$accountsStatement = $db->prepare($sqlQuery);
$accountsStatement->execute();
$accounts = $accountsStatement->fetchAll();

$user_db = 'SELECT first_name, last_name FROM user INNER JOIN accounts ON user.id = accounts.owner_id';
$userStatement = $db->prepare($user_db);
$userStatement->execute();
$user = $userStatement->fetchAll();

// $operation_db = 'SELECT * FROM operations INNER JOIN accounts ON operations.id = operations.account_id WHERE account_id = :page_id';
// $operationStatement = $db->prepare($operation_db);
// $operationStatement->execute(["page_id" => $id]);
// $operation = $operationStatement->fetchAll();

echo '<div class="row mx-4 p-3 mb-2">';
for ($i = 0; $i < sizeof($accounts); $i++) {
?>
    <div class='col-xl-3 col-md-6'>
        <div class='card bg-primary text-white mb-2'>
            <div class='card-body'>
                <p class='card-text'>Type de compte : <?php echo $accounts[$i]['account_type']; ?></p>
                <p class='card-text'>N° : <?php echo $accounts[$i]['account_number']; ?></p>
                <p class='card-text'>Solde : <?php echo $accounts[$i]['account_amount']; ?> €</p>
                <p class='card-text'>Date de création : <?php echo $accounts[$i]['account_creation_date']; ?></p>
                <p class='card-text'>Propriétaire : <?php echo  $user[$i]['first_name']; ?> <?php echo  $user[$i]['last_name']; ?></p>
            </div>
        </div>
    </div>
<?php
}
?>
</div>
<?php


$operation_db = 'SELECT * FROM operations WHERE account_id = :page_id';
$operationStatement = $db->prepare($operation_db);
$operationStatement->execute(["page_id" => $id]);
$operation = $operationStatement->fetchAll();
?>
<div class="row mx-5">
    <h3>Opérations</h3>
    <?php
    foreach ($operation as $operations) {
    ?>

        <ul>
            <li>Type : <?php echo $operations['operation_type'] ?> </li>
            <li>Date : <?php echo $operations['operation_date'] ?></li>
            <li>Montant : <?php echo $operations['operation_amount'] ?> € </li>
            <li>Status : <?php echo $operations['operation_status'] ?></p>
            </li>
        </ul>


    <?php
    }
    ?>
</div>

<form method="post" action="add_operation_db.php?id=<?php echo $id ?>" class="row g-3 m-2">
    <h3>Effectuer une opération</h3>
    <div class="col-md-3">
        <label for="operation_type" class="form-label">Opération à effectuer</label>
        <select class="form-select" name="operation_type" required>
            <option selected disabled value="">Choisir...</option>
            <option>Dépot</option>
            <option>Retrait</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="operation_amount" class="form-label">Montant</label>
        <input type="number" class="form-control" name="operation_amount" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning">Effectuer</button>
    </div>
</form>

<?php endif; ?>
<?php include('templates/footer.php'); ?>
