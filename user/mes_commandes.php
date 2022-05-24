<?php
require_once '../includes/init.inc.php';
 ?>


<div class="container" style="margin-top: 130px;" >
  <h1 class="text-center">Les commandes</h1><br>
  <?php 
  mes_commandes($_SESSION['id_user']);
  ?>
</div>