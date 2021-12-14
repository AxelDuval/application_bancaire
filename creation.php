<?php
include('templates/header.php');
include('templates/nav.php');
include('templates/footer.php');
include_once('templates/login.php');
?>

<?php if(isset($_SESSION['LOGGED_USER'])): ?>
<?php include('form_add_account.php'); ?>
<?php endif; ?>