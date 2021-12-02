
<?php

if (isset($_POST['type']) && isset($_POST['amount'])) {

    $type = htmlspecialchars($_POST['type']);
    $amount = htmlspecialchars($_POST['amount']);

    echo "<div class='row m-2'>" .
        "<div class='col-xl-3 col-md-6'>" .
        "<div class='card bg-primary text-white mb-4'>" .
        "<div class='card-body'>";
    echo "<p class='card-text'>" . $type . "</p>";
    echo "<p class='card-text'>" . $amount . '€' . "</p>";
    echo
    "</div>" .
        "</div>" .
        "</div>";
}

echo '<form method="post" action="creation.php" class="row g-3 m-3"> 
<h3>Créer un compte</h3>
       
    <div class="col-md-3">
    <label for="type" class="form-label">Type de compte</label>
    <select class="form-select" name="type" required>
      <option selected disabled value="">Choisir...</option>
      <option>Compte courant</option>
      <option>Livret A</option>
      <option>Compte epargne</option>
      <option>PEL</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="amount" class="form-label">Montant à créditer (50€ minimun)</label>
    <input type="number" class="form-control" name="amount" min="50" required>
  </div>
  
  <div class="col-12">
  <button type="submit" class="btn btn-warning">Envoyer</button>
  </div>
  </form>
  '


?>