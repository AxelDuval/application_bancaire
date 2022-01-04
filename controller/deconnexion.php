
<?php 
include('../templates/header.php');
session_destroy();
echo 'Vous avez été deconnecté. <a href="/index.php">Retour</a>';

include('../templates/footer.php');


?>