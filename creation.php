<?php
include('templates/header.php');
include('templates/nav.php');
?>  

  <main>
    <div class="container-fluid">
  
      <div id="accounts" class="row mt-4">
        <div class="account col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
              <div class="card-body">
                <p class="card-text">Compte courant</p>
                <p class="card-text">645 €</p></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Voir le détail</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        
      </div>
    
    </div>

    <div class="container-fluid">
        <div class="row">
           
            <form id ="formAccount" class="row g-3">
                
                <div class="col-md-3">
                  <label for="type" class="form-label">Type de compte</label>
                  <select class="form-select" id="type" required>
                    <option selected disabled value="">Choisir...</option>
                    <option>Compte courant</option>
                    <option>Livret A</option>
                    <option>Compte epargne</option>
                    <option>PEL</option>



                  </select>
                </div>
                <div class="col-md-3">
                  <label for="amount" class="form-label">Montant à créditer (50€ minimun)</label>
                  <input type="number" class="form-control" id="amount" min="50" required>
                </div>
                
                <div class="col-12">
                  <div id="create" class="btn btn-primary" onclick=createAccount()>Créer mon compte</div>
                </div>
              </form>

        </div>
    </div>   
 </main>

 <?php
include('templates/footer.php');
 ?>