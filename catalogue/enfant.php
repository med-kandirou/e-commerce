<?php require_once 'header.cat.php'; ?>   

<div class="container"> 
    <div class="row" style="margin-top: 90px;">
        <img src="../image_site/kids_banner.jpg" class="img-responsive" alt="banner" id="kids_banner"> 
    </div>

</div>

<?php 
require_once '../includes/init.inc.php';

for ($i=0; $i < count($cat); $i++) { 
    getproduct_anonyme('enfant',$cat[$i],'#5EB1BF');
}




?>

<?php require_once 'footer.cat.php'; ?>
