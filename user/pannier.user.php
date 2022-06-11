<?php
require_once '../includes/init.inc.php';
require_once 'header.user.php';
 ?>

<div class="container"> 
    <div class="row">
        <h1 id="pannier">MON PANNIER</h1>
    </div>

</div>

<?php 


mes_produits($_SESSION['id_user']);

require_once 'footer.user.php';

?>