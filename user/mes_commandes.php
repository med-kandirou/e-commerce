<?php
require_once '../includes/init.inc.php';
require_once 'header.user.php';
 ?>


<div class="container" style="margin-top: 130px;" >
  <h1 class="text-center">Les commandes en attente</h1><br>
  <?php 
  mes_commandes_non_confime($_SESSION['id_user']);
  ?>
</div>
<div class="container" style="margin-top: 130px;margin-bottom: 300px;" >
  <h1 class="text-center">Les commandes en cours de livraison</h1><br>
  <?php 
  mes_commandes_confirm($_SESSION['id_user']);
  ?>
</div>

<?php require_once 'footer.user.php'; ?>
