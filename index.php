<?php

include('mysql.php');
include('templates/header.php');
include('templates/nav.php');
include_once('templates/login.php');
?>



<?php if (isset($_SESSION['LOGGED_USER'])) : ?>
    <?php include('view/accounts_list.php'); ?>
<?php endif; ?>
<?php include('templates/footer.php'); ?>