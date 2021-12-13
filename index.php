<?php
include('templates/header.php');
include('templates/nav.php');
include('data/acounts_thomas.php');
include('templates/footer.php');
include_once('templates/login.php');
?>
<?php if(isset($loggedUser)): ?>
<?php include('templates/accounts_list.php'); ?>
<?php endif; ?>




