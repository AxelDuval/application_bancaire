<?php
require('../config/mysql.php');
include('../model/accounts_select_bdd.php');

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
        <p class='card-text'>Dernière opération :<br><?php echo  $operation[$i]['operation_date'];?> - <?php echo $operation[$i]['operation_type'];?> - <?php echo $operation[$i]['operation_amount']; ?> €</p>
        <a class='small text-white stretched-link' href='../view/account_detail.php?id=<?php echo $accounts[$i]['id'] ?>'>Voir le détail</a>
      </div>
    </div>
  </div>


<?php
}
?>
</div>