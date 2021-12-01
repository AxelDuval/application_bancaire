<!doctype html>
<html class="no-js" lang="">

<head>
  <meta charset="utf-8">
  <title>Application de gestion de compte bancaire</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="">
  <meta property="og:type" content="">
  <meta property="og:url" content="">
  <meta property="og:image" content="">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


  <meta name="theme-color" content="#fafafa">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Ma banque</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Actus.html">Actualités</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="statistiques.html">Statistiques</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="creation.html">Création de compte</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>
  
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
  
 <footer class=" footer py-3 bg-dark">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
      <li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Accueil</a></li>
      <li class="nav-item"><a href="Actus.html" class="nav-link px-2 text-muted">Actualités</a></li>
      <li class="nav-item"><a href="statistiques.html" class="nav-link px-2 text-muted">Statistiques</a></li>
    </ul>
    <p class="text-center text-muted">© 2021 Ma banque</p>
  </footer>
  
  
  
  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
  <script src="js/creation.js"></script>


  

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
