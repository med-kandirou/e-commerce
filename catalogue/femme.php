<?php require_once 'header.cat.php'; ?>          
<div class="container"> 
    <div class="row">
        <img src="../image_site/femme_banner.jpg" class="img-responsive" alt="banner">
    </div>
</div>

<?php 
require_once '../includes/init.inc.php';

for ($i=0; $i < count($cat); $i++) { 
    getproduct_anonyme('femme',$cat[$i],'#5EB1BF');
}



?>

<?php require_once 'footer.cat.php'; ?>

















