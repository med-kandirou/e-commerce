<?php
require_once '../includes/init.inc.php';
 require_once 'header.admin.php';
 ?>


<div class="container" style="margin-top: 130px;" >
  <h1 class="text-center">Les commandes en attente</h1><br>
  <?php 
  tous_commandes_non_confirm();
  ?>
</div>

<div class="container" style="margin-top: 130px;margin-bottom: 300px;" >
  <h1 class="text-center"> Les commandes en cours de livraison</h1><br>
  <?php 
  tous_commandes_confirm();
  ?>
</div>

<?php
 require_once 'footer.admin.php'; ?>