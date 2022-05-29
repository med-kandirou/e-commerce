
<?php
require_once 'header.user.php';
 ?>


<div class="container"> 
    <div class="row">
        <img src="../image_site/femme_banner.jpg" class="img-responsive" alt="banner">
    </div>
</div>




<?php 
require_once '../includes/init.inc.php';

for ($i=0; $i < count($cat); $i++) { 
    getproduct_user('femme',$cat[$i],'#CC2936');
}


require_once 'footer.user.php';
?>
                               		



















