<?php
include('../mysql.php');
include('../templates/header.php');
include('../templates/nav.php');
include_once('../templates/login.php');
include("../model/account_detail_bdd.php")
?>

<?php

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
include("../model/operation_db.php");
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

<?php 
include("form_add_operation.php");
include('../templates/footer.php'); 
?>