<div class="container"> 
    <div class="row">
        <center><h1 id="pannier">MON PANNIER</h1></center>
    </div>

</div>

<?php 

require_once '../includes/init.inc.php';
mes_produits($_SESSION['id_user']);

?>