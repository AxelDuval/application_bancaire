<?php
include('templates/header.php');
include('templates/nav.php');
include('data/acounts_thomas.php');
include('templates/footer.php');
?>


<?php 
if (!empty($_GET) && isset($_GET['number'])){
    $number = htmlspecialchars($_GET['number']);
    $name = htmlspecialchars($_GET['name']);
    $owner = htmlspecialchars($_GET['owner']);
    $amount = htmlspecialchars($_GET['amount']);
    $lastOperation = htmlspecialchars($_GET['last_operation']);

} else {
    $error = 'Compte inconnu !';
}
?>
<h2 class="m-3">Détail du compte</h2>
<div class="row mt-4 p-3">
<?php
if(isset($error)){
    echo $error;
} else {
    echo "<div class='col-xl-6 col-md-6'>" .
    "<div class='card bg-primary text-white mb-4'>" .
    "<div class='card-body'>";
echo "<p class='card-text'>" . $name . "</p>";
echo "<p class='card-text'>" . $number . "</p>";
echo "<p class='card-text'>" . $owner . "</p>";
echo "<p class='card-text'>" . "Solde : " . $amount . "€" . "</p>";
echo "<p class='card-text'>" . "Dernière opération : " . $lastOperation . "</p>";
echo
"</div>" .
    "</div>" .
    "</div>";




}
?>
</div>