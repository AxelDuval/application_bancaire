<?php if (isset($_SESSION['LOGGED_USER'])) : ?>
    <?php

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
    ?>
    <?php endif; ?>