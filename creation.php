<?php
include('templates/header.php');
include('templates/nav.php');
include('templates/footer.php');
?>

<?php if(isset($_SESSION['LOGGED_USER'])): ?>
<?php include('form.php'); ?>
<?php endif; ?>