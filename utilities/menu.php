<div class="banniere">
  <!--barre de navigation-->
<div class="nav_container w-90 m-auto fw-normal text-uppercase">
    <nav class="navbar navbar-expand-xl w-100 pt-0">
      <div class="container-fluid">
        <a class="navbar-brand m-0 p-0" href="http://localhost:8888/DRGONZO/" aria-current="page">
          <picture>
            <img class="logo" src="assets/logo.png" alt="gonzo">
          </picture>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body justify-content-around">
            <ul class="navbar-nav d-flex align-items-center ">
              <li class="nav-item">
                <a class="nav-link px-4 text-nowrap text-dark" href="http://localhost:8888/DRGONZO/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link px-4 text-nowrap text-dark" href="/DRGONZO/produits.php">Produit</a>
              </li>
              <!--drop down menu-->
              <li class="nav-item dropdown">
                <a class="nav-link px-4 text-nowrap text-dark" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Catégorie
                </a>
                <ul class="dropdown-menu dropdown-black-bg rounded-0 mt-0">
                  <li><a class="dropdown-item bg-transparent " href="#">Psychotrope</a></li>
                  <li><a class="dropdown-item bg-transparent" href="#">Somnifère</a></li>
                  <li><a class="dropdown-item bg-transparent" href="#">Amphétamine</a></li>
                  <li><a class="dropdown-item bg-transparent" href="#">Vitamine</a></li>
                </ul>
              </li>
              <li class="nav-item"><a class="nav-link px-4 text-nowrap text-dark" href="/DRGONZO/contact.php">Contact</a></li>
              <button class="btn btn-outline-dark d-xl-none d-block" type="submit">
                  <i class="bi-cart-fill me-1"></i>
                  PANIER
                  <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
              </button>
            </ul>
          </div>
        </div>
        <button class="btn btn-outline-dark d-none d-xl-block" type="submit">
            <i class="bi-cart-fill me-1"></i>
            PANIER
            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
        </button>
     </nav>
    </div>
  </div>
</div>