<?php
require_once '../includes/init.inc.php';
 require_once 'header.admin.php';
 ?>


<div class="container" style="margin-top: 130px;" >
  <h1 class="text-center">Les Clients</h1><br>
  <?php 
    les_clients();
  ?>
</div>

<?php
 require_once 'footer.admin.php'; ?>