<?php
try {
    $db = new PDO('mysql:host=localhost;dbname=banque_php', "BanquePHP", "banque76");
} catch (\Exception $e) {
    echo "Erreur lors de la connexion à la base de données: " . $e->getMessage() . "<br/>";
    die();
}

// On récupère tout le contenu de la table user
$sqlQuery = 'SELECT email, password, id FROM user';
$userStatement = $db->prepare($sqlQuery);
$userStatement->execute();
$users = $userStatement->fetchAll();

// Validation du formulaire
if (isset($_POST['email']) &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            // Enregistrement de l'email utilisateur en session
            $_SESSION['LOGGED_USER'] = $user['email'];
            $_SESSION['user_id'] = $user['id'];

        } else {
            $errorMessage = sprintf(
                'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                $_POST['email'],
                $_POST['password']
            );
        }
    }
}
?>

<!--
   Si utilisateur est non identifié, on affiche le formulaire
-->
<?php if (!isset($_SESSION['LOGGED_USER'])) : ?>
    <div class="row m-3">
        <form action="index.php" method="post">
            <!-- si message d'erreur on l'affiche -->
            <?php if (isset($errorMessage)) : ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help" placeholder="you@exemple.com">
                <div id="email-help" class="form-text">L'email utilisé lors de la création de compte.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
    <!-- 
    Si utilisateur bien connecté on affiche un message de succès
-->
<?php else : ?>
    <div class="alert alert-success" role="alert">
        Bonjour <?php echo $_SESSION['LOGGED_USER']; ?> et bienvenue sur le site !
    </div>
<?php endif; ?>