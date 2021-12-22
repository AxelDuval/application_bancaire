<?php
include('../templates/header.php');
include('../templates/nav.php');
include('../config/mysql.php');

include_once('../templates/login.php');
?>

<?php if(isset($_SESSION['LOGGED_USER'])): ?>
<?php include('../view/form_add_account.php'); ?>
<?php endif; ?>
<?php include('../templates/footer.php'); ?>
