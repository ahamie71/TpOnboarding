<?php

$isLoggedIn = isset($_SESSION['user']) && $_SESSION['user'] > 0;

?>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary navbar-custom">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img class="logoNav" width="75px" src="../public/images/logo.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/">Accueil</a>
        <a class="nav-link" href="../pages/listProducts.php">Nos Produits</a>
        <?php if ($isLoggedIn) { ?>
          <a class="nav-link" href="../pages/profile.php">Profil</a>
          <a class="nav-link" href="../pages/auth_logout.php">Déconnexion</a>
        <?php } else { ?>
          <a class="nav-link" href="../pages/auth_login.php">Connexion</a>
          <a class="nav-link" href="../pages/auth_signin.php">Inscription</a>
        <?php } ?>
      </div>
    </div>
  </div>
</nav>