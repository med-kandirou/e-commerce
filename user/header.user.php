<?php require_once '../includes/init.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Acceuil</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Open+Sans">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link rel="stylesheet" href="../style/acceuilstyle/style.css">
  <link rel="stylesheet" href="../style/header.css">
  <link rel="stylesheet" href="../style/acceuilstyle/departement_style.css">
    <!-- nav bar -->
    <link rel="stylesheet" href="../style/acceuilstyle/footer_style.css">
</head>

<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 60px;" >
    <div class="container-fluid " style="display: inline-block;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" id="brand" href="index.user.php"><img id="logo" src="../image_site/logo_site.png" alt="Logo" ></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="display: inline-block;">

          <li><a href="./index.php">Acceuil</a></li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Homme
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="affiche_prod.user.php?dep=homme&cat=Pantallons">Pantallons</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=homme&cat=Chemises">Chemises</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=homme&cat=T-shirts">T-shirts</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=homme&cat=POLO">POLO</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Femme
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Vestes">Blazers/Vestes</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Robes">Robes</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Pyjama">Pyjama</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Pantallons">Pantallons</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Chemises">Chemises/Blouses</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=T-shirts">T-shirts</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Jupes">Jupes</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Chassures">Chassures</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Mentaux">Mentaux</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Sacs">Sacs</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Caftan">Caftan</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Jellab">Jellab</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=femme&cat=Accessoires">Accessoires</a>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Enfant
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item"  href="affiche_prod.user.php?dep=enfant&cat=Garçon">Garçon</a>
                  <a class="dropdown-item" href="affiche_prod.user.php?dep=enfant&cat=Fille">Fille</a>
                </div>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" class="account" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <i class="bi bi-person-check-fill"> </i><?php echo 'Bonjour '.$_SESSION['nom']  ?>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="pannier.user.php"><i class="bi bi-cart4"></i>Pannier</a>
              <a class="dropdown-item" href="mes_commandes.php"><i class="bi bi-bag-check-fill"></i>Mes Commandes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../log_out.php"><i class="bi bi-door-open-fill"></i>Déconnecter</a>
            </div>
            </li>
          </ul>
      </div>
    </div>
  </nav>