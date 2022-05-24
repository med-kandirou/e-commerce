<?php
require_once '../includes/init.inc.php';
if (!isset($_SESSION['id_user'])) {
  header('location:../index.php');
  exit();
}
else{
?>
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
  <link rel="stylesheet" href="../style/acceuilstyle/footer_style.scss">
  
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 60px;" >
    <div class="container-fluid " style="display: inline-block;">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" id="brand" href="#"><img id="logo" src="../image_site/logo_site.png" alt="Logo" >Kandirou</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right" style="display: inline-block;">
            <li><a id="acceuil_link" href="#">Acceuil</a></li>
            <li><a id="homme_link" href="#">Homme</a></li>
            <li><a id="femme_link" href="#">Femme</a></li>
            <li><a id="enfant_link" href="#">Enfant</a></li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="bi bi-person-check-fill"></i>Compte
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><i class="bi bi-person-circle"></i>Profil</a>
              <a class="dropdown-item" id="pannier_link_admin" href="#"><i class="bi bi-cart4"></i>Pannier</a>
              <a class="dropdown-item" id="add_produit"><i class="bi bi-shop"></i>Produits</a>
              <a class="dropdown-item" id="commande_admin" href="#"><i class="bi bi-bag-check-fill"></i>Les commandes</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="../log_out.php"><i class="bi bi-door-open-fill"></i>Log out</a>
            </div>
            </li>
          </ul>
      </div>
    </div>
  </nav>

  <section id="container-fluid" >
    <div id="acceuil_page">
      <?php
      require_once 'acceuil.admin.php';
      ?>
    </div>
    <div id="femme_page" class="d-none">
      <?php
      require_once 'femme.admin.php';
      ?>
    </div>
    <div id="homme_page" class="d-none">
      <?php
      require_once 'homme.admin.php';
      ?>
    </div>
    <div id="enfant_page" class="d-none">
      <?php
      require_once 'enfant.admin.php';
      ?>
    </div>

    <div id="mon_pannier" class="d-none">
      <?php
      require_once '../catalogue/mon_pannier.php';
      ?>
    </div>
    <div id="produit" class="d-none">
      <?php
      require_once 'produit.admin.php';
      ?>
    </div>
    <div id="commande" class="d-none">
      <?php
      require_once 'commande.admin.php';
      ?>
    </div>


  </section>


  <!-- Footer -->
  <footer class="flex-rw">
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">About Pavilion</h4></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">GET TO KNOW US</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">PROMOS</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">BECOME A RETAILER</a></li>

    <li><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">JOB OPENINGS</a></li>

    <li><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">EVENTS</a></li>
  </ul>
  <ul class="footer-list-top">
    <li>
      <h4 class="footer-list-header">The Gift Selection</h4></li>


    <li><a href='#' class="generic-anchor footer-list-anchor">ANGEL FIGURINES</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor">HOME DECOR</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor">MUGS</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor">PET LOVER</a></li>
    <li><a href='#' class="generic-anchor footer-list-anchor" target="_blank">HANDBAGS & JEWELRY</a></li>
  </ul>
  <ul class="footer-list-top">
    <li id='help'>
      <h4 class="footer-list-header">Please Help Me</h4></li>
    <li><a href='/shop/about-contact' class="generic-anchor footer-list-anchor" itemprop="significantLink">CONTACT</a></li>
    <li><a href='/faq.html' class="generic-anchor footer-list-anchor" itemprop="significantLink">FAQ</a></li>
    <li id='find-a-store'><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">STORE LOCATOR</a></li>
    <li id='user-registration'><a href='#' class="generic-anchor footer-list-anchor" itemprop="significantLink">NEW USERS</a></li>
    <li id='order-tracking'><a href='#' itemprop="significantLink" class="generic-anchor footer-list-anchor">ORDER STATUS</a></li>
  </ul>
  <section class="footer-social-section flex-rw">
      <span class="footer-social-overlap footer-social-connect">
      CONNECT <span class="footer-social-small">with</span> US
      </span>
      <span class="footer-social-overlap footer-social-icons-wrapper">
      <a href="https://www.pinterest.com/paviliongift/" class="generic-anchor" target="_blank" title="Pinterest" itemprop="significantLink"><i class="fa fa-pinterest"></i></a>
      <a href="https://www.facebook.com/paviliongift" class="generic-anchor" target="_blank" title="Facebook" itemprop="significantLink"><i class="fa fa-facebook"></i></a>
      <a href="https://twitter.com/PavilionGiftCo" class="generic-anchor" target="_blank" title="Twitter" itemprop="significantLink"><i class="fa fa-twitter"></i></a>
      <a href="http://instagram.com/paviliongiftcompany" class="generic-anchor" target="_blank" title="Instagram" itemprop="significantLink"><i class="fa fa-instagram"></i></a>
      <a href="https://www.youtube.com/channel/UCYgUODvd0qXbu_LkUWpTVEg" class="generic-anchor" target="_blank" title="Youtube" itemprop="significantLink"><i class="fa fa-youtube"></i></a>
      <a href="https://plus.google.com/+Paviliongift/posts" class="generic-anchor" target="_blank" title="Google Plus" itemprop="significantLink"><i class="fa fa-google-plus"></i></a>
      </span>
  </section>
  <section class="footer-bottom-section flex-rw">
<div class="footer-bottom-wrapper">   
<i class="fa fa-copyright" role="copyright">
 
</i> 2022 Pavilion in <address class="footer-address" role="company address">Bergen, NY</address><span class="footer-bottom-rights"> - All Rights Reserved - </span>
    </div>
    <div class="footer-bottom-wrapper">
    <a href="/terms-of-use.html" class="generic-anchor" rel="nofollow">Terms</a> | <a href="/privacy-policy.html" class="generic-anchor" rel="nofollow">Privacy</a>
      </div>
  </section>
</footer>

  




</body>

		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="../js/acceuil_js/owl.carousel.min.js"></script>
    <script src="../js/acceuil_js/main.js"></script>
</html>


<?php } ?>

  
  



