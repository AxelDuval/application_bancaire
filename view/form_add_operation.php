<form method="post" action="../model/add_operation_db.php?id=<?php echo $id ?>" class="row g-3 m-2">
    <h3>Effectuer une opération</h3>
    <div class="col-md-3">
        <label for="operation_type" class="form-label">Opération à effectuer</label>
        <select class="form-select" name="operation_type" required>
            <option selected disabled value="">Choisir...</option>
            <option>Dépot</option>
            <option>Retrait</option>
        </select>
    </div>
    <div class="col-md-3">
        <label for="operation_amount" class="form-label">Montant</label>
        <input type="number" class="form-control" name="operation_amount" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-warning">Effectuer</button>
    </div>
</form>