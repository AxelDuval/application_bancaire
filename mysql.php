<?php


try {
    $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
  } catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
  }
  

?>