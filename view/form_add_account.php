<form method="post" action="../model/add_account_db.php" class="row g-3 m-3">
  <h3>Créer un compte</h3>
  <div class="col-md-3">
    <label for="account_type" class="form-label">Type de compte</label>
    <select class="form-select" name="account_type" required>
      <option selected disabled value="">Choisir...</option>
      <option>Compte courant</option>
      <option>Livret A</option>
      <option>Compte epargne</option>
      <option>PEL</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="account_amount" class="form-label">Montant à créditer (50€ minimun)</label>
    <input type="number" class="form-control" name="account_amount" min="50" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-warning">Créer</button>
  </div>
</form>